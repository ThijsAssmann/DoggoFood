<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Auth;
use Input;
use Validator;
use Session;

use App\User;
use App\Product;
use App\Category;
use App\Subcategory;


class AdminProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application admin product page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){

                $category = Session::get('category');
                if($category != '*' && Session::get('category')){
                    $products = Product::all()->where('cat', '=', $category);
                } else if ($category == '*') {
                    $products = Product::all();
                } else {
                    $products = Product::all();
                }

            return view('dashboard.product.overview', compact('products'));
        } else {
            return Redirect::to('/');
        }
    }

    /**
     * Update the product.
     *
     * @return Response
     */
    public function update(Product $product, Request $request) {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){

            $this->validate($request, [
                'id' => 'required',
                'name' => 'required|max:64',
                'weight' => 'required|numeric|max:255',
                'weight_unit' => 'required|max:10',
                'stock' => 'required|numeric',
                'price' => 'required|numeric',
                'sales_price' => 'required|numeric',
                'cat' => 'required|max:32',
                'subcat' => 'required|max:32',
                'desc' => 'required|max:255',
            ]);

            $product = Product::where(['id' => $request->id])->first();
            $product->update($request->all());
        }
        return Redirect::to('/dashboard/producten');
    }

    /**
     * destroy the product.
     *
     * @return Response
     */
    public function destroy(Product $product, Request $request) {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){
            $product = Product::where('id', $request->id)->delete();
        }
        return Redirect::to('/dashboard/producten');
    }

    /**
     * Show the product single page
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){

            $product = Product::find($id);
            $subcategorys = Subcategory::all();
            $categorys = Category::all();

            return view('dashboard.product.edit', array('product' => $product, 'subcategorys' => $subcategorys, 'categorys' => $categorys));
        } else {
            return Redirect::to('/dashboard/producten');
        }
    }

    /**
     * Get the prefered product category and put it into the session
     *
     * @return Response
     */
    public function post() {
        $category = Input::get('category');
        Session::put('category', $category);
        return Redirect::back();
    }

    /**
     * Show create form
     *
     * @return view
     */
    public function create(Request $request)
    {
        $subcategorys = Subcategory::all();
        $categorys = Category::all();
        return view('dashboard.product.create', array('subcategorys' => $subcategorys, 'categorys' => $categorys));
    }

    /**
     * Stores a new category
     *
     * @return mixed
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:64',
            'weight' => 'required|numeric|max:255',
            'weight_unit' => 'required|max:10',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'sales_price' => 'required|numeric',
            'cat' => 'required|max:32',
            'subcat' => 'required|max:32',
            'desc' => 'required|max:255',
        ]);

        Product::create(
            [
                'name' => $request->name,
                'weight' => $request->weight,
                'weight_unit' => $request->weight_unit,
                'stock' => $request->stock,
                'price' => $request->price,
                'sales_price' => $request->sales_price,
                'cat' => $request->cat,
                'subcat' => $request->subcat,
                'desc' => $request->desc,
            ]
        );

        return Redirect::to('/dashboard/producten');
    }

}
