<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Subcategory;
use App\User;
use Input;
use Redirect;

class AdminCategoryController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = Category::all();
        $subcategorys = Subcategory::all();
        return view('dashboard.category.overview', compact('categorys','subcategorys'));
    }

    /**
     * Show a single category
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){

            $category = Category::find($id);

            return view('dashboard.category.edit', array('category' => $category));
        } else {
            return Redirect::to('/');
        }
    }

    /**
     * Update the category.
     *
     * @return Response
     */
    public function update(Category $category, Request $request) {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){

            $this->validate($request, [
                'name' => 'required|max:32',
                'desc' => 'required|max:255',
            ]);

            $category = Category::where(['id' => $request->id])->first();
            $category->update($request->all());
        }
        return Redirect::to('/dashboard/categorys');
    }

    /**
     * destroy the product.
     *
     * @return Response
     */
    public function destroy(Category $category, Request $request) {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){
            $category = Category::where('id', $request->id)->delete();
        }
        return Redirect::to('/dashboard/categorys');
    }

    /**
     * Show create form
     *
     * @return view
     */
    public function create(Request $request)
    {
        return view('dashboard.category.create');
    }

    /**
     * Stores a new category
     *
     * @return mixed
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:32',
            'desc' => 'required|max:255',
        ]);

        Category::create(
            [
                'name' => $request->name,
                'desc'   => $request->desc,
            ]
        );

        return Redirect::to('/dashboard/categorys');
    }

}
