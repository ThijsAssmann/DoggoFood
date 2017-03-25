<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{

    protected $table = 'subcategory';

    /**
     * The attributes that are mass assignable.
     * @author Rob Biemans
     * @var array
     */
    protected $fillable = [
        'name', 'desc',
    ];

}
