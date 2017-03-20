<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'product_id', 'count', 'totalPrice'
    ];

    /**
     * Get the products record associated with the cart (user).
     */
    public function containsProduct()
    {
        return $this->hasMany('App\Product', 'id', 'product_id');
    }

}
