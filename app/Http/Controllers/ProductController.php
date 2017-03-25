<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Redirect;

class ProductController extends Controller
{

    /**
     * Show the application dashboard depends on requested url
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findorfail($id);
        return view('product', array('product' => $product));
    }

}
