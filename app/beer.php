<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beer extends Model
{
    protected $fillable =[

        'name',
        'country',
        'manufacturer',
        'price',
        'isbn'

    ];
}
