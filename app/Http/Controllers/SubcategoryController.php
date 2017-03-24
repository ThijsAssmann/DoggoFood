<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Category;
use App\Subcategory;
use App\Product;
use Redirect;
use Session;

class SubcategoryController extends Controller
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
    public function index()
    {

    }

    /**
     * Show the application dashboard depends on requested url
     *
     * @return \Illuminate\Http\Response
     */
    public function show($cat,$subcat)
    {
        $category = Category::where('name', $cat)->firstOrFail();
        $subcategory = Subcategory::where('name', $subcat)->firstOrFail();

        $products = Product::query();
        $products = $products->where(['cat' => ucfirst($cat),'subcat' => ucfirst($subcat)]);
        $products = $products->paginate(6);
        return view('dashboard.category.show', array('category' => $category, 'subcategory'=> $category, 'products' => $products));
    }

}
