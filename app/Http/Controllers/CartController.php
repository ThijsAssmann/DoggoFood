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


class CartController extends Controller
{

    /**
     * Show the current cart
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::with('carts.containsProduct')->find(Auth::user()->id);
        return view('winkelwagen', compact('user'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required|numeric|between:1,100',
            'id' => 'required|numeric',
        ]);

        $product = Product::find($request->id)->first();
        $totalPrice = ($request->amount*$product->price);

        Cart::create([
            'user_id' => Auth::user()->id,
            'count' => $request->amount,
            'product_id' => $request->id,
            'totalPrice' => $totalPrice,
        ]);

        return redirect()->back();
    }

    /*
    public function update(Request $request, $id)
    {
        // Validation on max quantity
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);
         if ($validator->fails()) {
            session()->flash('error_message', 'Quantity must be between 1 and 5.');
            return response()->json(['success' => false]);
         }
        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');
        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('cart')->withSuccessMessage('Item has been removed!');
    }

    public function emptyCart()
    {
        Cart::destroy();
        return redirect('cart')->withSuccessMessage('Your cart has been cleared!');
    }
    */
}