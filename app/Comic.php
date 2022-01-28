<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'description',
        'img',
        'price',
        'serie',
        'sale_date',
        'type'
    ];
}
