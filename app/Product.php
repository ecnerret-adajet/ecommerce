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

    public function getPriceAttribute($price)
    {
        return 'P '.number_format($price);
    }

    public function addPhoto(Photo $photo)
    {
        return $this->photos()->save($photo);
    }

    /**
     * A Product is compose of many photos
     */
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
    
}
