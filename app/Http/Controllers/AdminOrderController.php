<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Input;
use Redirect;
use App\Order;
use App\User;
use App\Product;

class AdminOrderController extends Controller
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
        $orders = Order::all();
        return view('dashboard.order.overview', compact('orders'));
    }

    /**
     * Update the specified resource in storage.
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order, Request $request) {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){
            $order = Order::where('id', $request->id)->delete();
        }
        return Redirect::to('/dashboard/orders');
    }

    /**
     * Update the order
     * @author Rob Biemans
     * @return \Illuminate\Http\Response
     */
    public function update(Order $order, Request $request){
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){

            $this->validate($request, [
                'count' => 'required|numeric|between:1,5',
                'order_id' =>  'required|numeric',
                'totalPrice' =>  'required',
            ]);

            $order = Order::where(['id' => $request->order_id])->first();

            if ($request->count > $order->count) {
                $oldPrice = (str_replace(',', '.',$request->totalPrice)/$order->count);
                $newPrice = (str_replace(',', '.',$request->totalPrice)*$request->count);
            } else if ($request->count < $order->count) {
                $oldPrice = (str_replace(',', '.',$request->totalPrice)/$order->count);
                $newPrice = (str_replace(',', '.',$request->totalPrice)/$order->count);
            }
            else{
                $newPrice = $request->totalPrice;
            }
            $order->count = $request->count;
            $order->totalPrice = $newPrice;

            $order->save();
        }
        return Redirect::to('/dashboard/orders');
    }

    /**
     * Show the order single page
     * @author Rob Biemans
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if (User::where(['admin' => 1, 'email' => Auth::User()->email])->first()){
            $order = Order::where(['id' => $id])->first();
            $product = Product::where(['id' => $order->product_id])->first();
            return view('dashboard.order.edit', compact('order','product'));
        }
    }
}
