<?php

namespace App\Http\Controllers;

use App\Product;

class IndexController extends Controller
{

    /**
     * Show the index page with a few products.
     * @author Thijs Assmann
     * @return View and Products
     */
    public function index()
    {
        $products = Product::all()->random(3);
        return view('index', compact('products'));
    }
}
