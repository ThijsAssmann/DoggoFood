<?php

namespace App\Http\Controllers;

class ShoppingcartController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('winkelwagen');
    }
}