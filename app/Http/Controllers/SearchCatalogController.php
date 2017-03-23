<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class SearchCatalogController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $products = Product::paginate(6);
        return view('resultaten', compact('products'));
    }

    /**
     * Show products based on input.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProducts(Request $request)
    {
        $products = Product::query();

        if(strpos($request->search, ',') !== false ) {
            $products = $products
                ->where('price', '=', str_replace(',', '.', ($request->search)));
        } else if (is_numeric($request->search) == false) {
          $products = $products
              ->where('name', 'LIKE', '%'.$request->search.'%')
              ->orWhere('desc', 'LIKE', '%'.$request->search.'%');
        } else {
            $products = $products
                ->where('price', '=', $request->search);
        }
        $products = $products->paginate(6);
        return view('resultaten', compact('products'));
    }
}
