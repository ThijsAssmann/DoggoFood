<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cat_name', 'cat_desc',
    ];

}
