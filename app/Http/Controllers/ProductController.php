<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard depends on requested url
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $uri = $request->path();

        if ($uri == 'brokken') {
            return view('brokken');
        } else if( $uri == 'snacks') {
            return view('snacks');
        } else if($uri == 'training') {
            return view('training');
        } else {
            return view('index');
        }
    }

}
