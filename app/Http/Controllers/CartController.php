<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Auth;
use Input;
use Validator;
use Session;
use App\User;
use App\Cart;
use App\Product;
use App\Order;


class CartController extends Controller
{

    /**
     * Show the index page
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::with('carts.containsProduct')->find(Auth::user()->id);
        $cartInfo = [];
        $cartInfo['price'] = $this->calculatePrice($user->carts);
        return view('winkelwagen', compact('user', 'cartInfo'));
    }

    /**
     * Show the current cart
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()){
            $this->validate($request, [
                'amount' => 'required|numeric|between:1,100',
                'id' => 'required|numeric',
            ]);

            $product = Product::all()->where('id','=',$request->id)->first();

            $totalPrice = number_format(($request->amount*$product->price), 2, ',', '.');

            Cart::create([
                'user_id' => Auth::user()->id,
                'count' => $request->amount,
                'product_id' => $request->id,
                'totalPrice' => $totalPrice,
            ]);
            $request->session()->flash('success', 'Product toegevoegd aan winkelwagen.');
            return redirect()->back();
        } else {
            $request->session()->flash('error', 'Je moet ingelogd zijn om te kunnen shoppen!');
            return redirect()->back();
        }

    }

    /**
     * Update the cart
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function update(Cart $cart, Request $request){

        if (User::where(['email' => Auth::User()->email])->first()){

            $this->validate($request, [
                'count' => 'required|numeric|between:1,5',
                'cart_id' =>  'required|numeric',
                'totalPrice' =>  'required',
            ]);

            $cart = Cart::where(['id' => $request->cart_id])->first();

            if ($request->count > $cart->count) {
                $oldPrice = (str_replace(',', '.',$request->totalPrice)/$cart->count);
                $newPrice = (str_replace(',', '.',$request->totalPrice)*$request->count);
            } else if ($request->count < $cart->count) {
                $oldPrice = (str_replace(',', '.',$request->totalPrice)/$cart->count);
                $newPrice = (str_replace(',', '.',$request->totalPrice)/$cart->count);
            }
            else{
                $newPrice = $request->totalPrice;
            }
            $cart->count = $request->count;
            $cart->totalPrice = $newPrice;

            $cart->save();
        }
        return Redirect::to('/winkelwagen');
    }

    /**
     * Destroy the cart
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {
        if (User::where(['email' => Auth::User()->email])->first()){
            $cart = Cart::where(['id' => $request->id, 'user_id' => Auth::User()->id])->delete();
        }
        return Redirect::to('/winkelwagen');
    }

    /**
     * Move the cart to Order
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function cartToOrder(Request $request){
        if (User::where(['email' => Auth::User()->email])->first()){

            $cart = Cart::all()->where('user_id', '=', Auth::User()->id);

            foreach($cart as $c) {
                Order::create(
                    [
                        'user_id' => $c->user_id,
                        'product_id' => $c->product_id,
                        'count' => $c->count,
                        'totalPrice' => str_replace(',', '.', $c->totalPrice),
                        'statusCode' => 'In behandeling',
                    ]
                );
            }

           $this->destroy_cart($request->cart_id);
        }
        return Redirect::to('/orderSent');
    }

    /**
     * Destroy the cart and its product in it
     * @author Thijs Assmann
     * @return \Illuminate\Http\Response
     */
    public function destroy_cart($cart_id) {

        if (User::where(['email' => Auth::User()->email])->first()){

            $cart = Cart::all()->where('user_id', '=', Auth::User()->id);

            foreach($cart as $c) {
                $c->delete();
            }
        }
        return Redirect::to('/winkelwagen');
    }

    /**
     * Calculate the total cart price
     * @author Thijs Assmann
     * @return $totaalPrijs
     */
    public function calculatePrice($carts){
        $totaalPrijs = 0;
        foreach($carts as $cart){
            $totaalPrijs += (str_replace(',', '.',$cart->totalPrice));
        }
        return $totaalPrijs;
    }
}
