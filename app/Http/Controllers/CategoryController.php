<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Category;
use App\Product;
use Redirect;
use Session;

class CategoryController extends Controller
{

    /**
     * Show the category and it products
     * @author Rob Biemans
     * @return View with arrays
     */
    public function show($slug)
    {
        $category = Category::where('name', $slug)->firstOrFail();

        $products = Product::query();
        $products = $products->where('cat', '=', ucfirst($slug));
        $products = $products->paginate(6);
        return view('dashboard.category.show', array('category' => $category, 'products' => $products));
    }

}
