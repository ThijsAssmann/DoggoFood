<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Input;
use Redirect;

class AdminUserController extends Controller
{
    /**
     * Create a new controller instance.
     * @author Thijs Assmann
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('dashboard.user.overview', compact('users'));
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

    /**
     * Destroy the specified resource in storage.
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Request $request) {
      if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){
          $user = User::where('id', $request->id)->delete();
      }
      return Redirect::to('/dashboard/users');
    }

    /**
     * Update the specified resource in storage.
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function updateUser(User $user, Request $request) {
      if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){

          $user = User::where(['id' => $request->id])->first();
          $user->update($request->all());
      }
      return Redirect::to('/dashboard/users');
    }

    /**
     * Show the specified resource in storage.
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){

          $user = User::find($id);

          return view('dashboard.user.edit', array('user' => $user));
      } else {
          return Redirect::to('/');
      }
    }
}
