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
     * Show the products which belongs to the subcategory
     * @author Rob Biemans
     * @return View with Category/Subcategory/Products
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
