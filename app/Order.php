<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    /**
     * The attributes that are mass assignable.
     * @author Rob Biemans
     * @var array
     */
    protected $fillable = [
        'user_id', 'product_id', 'count', 'totalPrice' , 'transaction_id', 'statusCode', 'shipping_id',
    ];

}
