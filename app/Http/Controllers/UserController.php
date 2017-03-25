<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Input;
use Redirect;

class UserController extends Controller
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
     * Show the user profile.
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all()->where('email', '=', Auth::user()->email)->first();
        return view('profiel', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'street' => 'required',
            'street_number' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'country' => 'required',
        ]);

        $user = User::all()->where('email', '=', Auth::user()->email)->first();

        $user->street = $request->street;
        $user->street_number = $request->street_number;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->zipcode = $request->zipcode;
        $user->country = $request->country;
        $user->save();

        return redirect('/profiel');
    }
}
