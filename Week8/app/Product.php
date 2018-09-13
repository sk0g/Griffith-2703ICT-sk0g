<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'manufacturer_id'];

    function manufacturer() {
        return $this->belongsTo('App\Manufacturer');
    }
}
