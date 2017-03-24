<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Input;
use Redirect;
use App\Order;
use App\User;

class AdminOrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('dashboard.order.overview', compact('orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order, Request $request) {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){
            $order = Order::where('id', $request->id)->delete();
        }
        return Redirect::to('/dashboard/orders');
    }
}
