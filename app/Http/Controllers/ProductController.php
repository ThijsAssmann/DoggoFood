<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

public function index()
{
    return view('brokken');
}
}