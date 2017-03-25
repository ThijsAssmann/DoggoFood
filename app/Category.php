<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    /**
     * The attributes that are mass assignable.
     * @author Rob Biemans
     * @var array
     */
    protected $fillable = [
        'name', 'desc',
    ];

}
