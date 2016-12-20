<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'title',
    	'category_id',
    	'description',
    	'price',
    	'availability',
    	'image'
    ];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

}
