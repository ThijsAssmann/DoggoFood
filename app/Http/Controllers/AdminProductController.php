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
    public function index($id)
    {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){

            $product = Product::find($id);
            $subcategorys = Subcategory::all();
            $categorys = Category::all();

            return view('dashboard.product', array('product' => $product, 'subcategorys' => $subcategorys, 'categorys' => $categorys));
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
            $product = Product::where(['id' => $request->id])->first();
            $product->update($request->all());
        }
        return back();
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
        return back();
    }

}
