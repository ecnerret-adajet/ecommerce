<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
      protected $table = 'product_photos';

    protected $fillable = [
    	'path',
    	'name',
    	'thumbnail_path'
    ];

    /**
     * A products is created with photo attached
     */

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }

    public function baseDir()
    {
    	return 'storage/app';
    }

    public function setNameAttribute($name)
    {
    	$this->attributes['name'] =$name;
    	$this->path = $this->baseDir().'/'.$name;
    	$this->thumbnail_path = $this->baseDir().'/tn-'.$name;
    }

    public function delete()
    {
    	\File::delete([
    		$this->path,
    		$this->thumbnail_path
    	]);

    	parent::delete();
    }
}
