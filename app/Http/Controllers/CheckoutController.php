<?php

namespace App\Http\Controllers;

class CheckoutController extends Controller
{

    /**
     * Show the application dashboard.
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('afrekenen');
    }
}
