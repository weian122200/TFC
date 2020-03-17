<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=['name','description',
    'display',
    'rearCamera',
    'batteryCapacity',
    'processor',
    'ram',
    'operatingSystem',
    'frontCamera',
    'storage',
    'price','image','quantity','categoryID'];

    public function category(){

        return $this->belongsTo('App\Category');

    }
}
