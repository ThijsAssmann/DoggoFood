<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Subcategory;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(Schema::hasTable('category') || Schema::hasTable('subcategory')){
          $categories = Category::all();
          $subcategories = Subcategory::all();
          View::share(['cat_list' => $categories, 'subcat_list' => $subcategories]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
