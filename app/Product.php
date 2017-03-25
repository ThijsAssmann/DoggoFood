<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

    protected $table = 'product';

    /**
     * The attributes that are mass assignable.
     * @author Rob Biemans
     * @var array
     */
    protected $fillable = [
        'name', 'desc', 'picture', 'price', 'sales_price', 'stock', 'cat', 'subcat', 'weight', 'weight_unit',
    ];

}
