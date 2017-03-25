<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     * @author Rob Biemans
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'street' , 'street_number', 'zipcode', 'city', 'country', 'state', 'admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * @author Rob Biemans
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'admin',
    ];

    /**
     * Get the products record associated with the cart (user).
     * @author Rob Biemans
     */
    public function carts()
    {
        return $this->hasMany('App\Cart');
    }

}
