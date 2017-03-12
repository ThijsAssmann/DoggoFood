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
use App\Subcategory;

class AdminProductsController extends Controller
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
                } else {
                    $products = Product::all();
                }

            return view('dashboard.products', compact('products'));
        } else {
            return Redirect::to('/');
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

}
