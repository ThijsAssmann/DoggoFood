<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'product';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prod_name', 'prod_desc', 'prod_price', 'prod_sales_price', 'prod_stock', 'prod_cat', 'prod_subcat', 'prod_weight', 'prod_weight_unit',
    ];

}
