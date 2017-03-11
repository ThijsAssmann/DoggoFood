<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{

    protected $table = 'subcategory';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cat_name', 'cat_desc',
    ];

}
