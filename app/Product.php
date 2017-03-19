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
        'name', 'desc', 'price', 'sales_price', 'stock', 'cat', 'subcat', 'weight', 'weight_unit',
    ];
    
}
