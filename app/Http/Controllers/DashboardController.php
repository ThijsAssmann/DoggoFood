<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Redirect;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     * @author Rob Biemans
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard. if the user is an admin else redirect to previous page
     * @author Rob Biemans
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){
            return view('dashboard.overview');
        } else {
            return Redirect::to('/');
        }
    }
}
