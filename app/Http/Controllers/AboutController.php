<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{

    /**
     * Show the application dashboard.
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('about');
    }
}
