<?php

namespace App\Http\Controllers;

use App\Product;

class IndexController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $products = Product::all()->random(3);
        return view('index', compact('products'));
    }
}
