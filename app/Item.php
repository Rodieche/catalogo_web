<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Item extends Model implements SluggableInterface
{

    use SluggableTrait;

    protected $sluggable = [
        'build_from'    =>  'title',
        'save_to'       =>  'slug'
    ];

    protected $table = "items";

    protected $fillable = ['title', 'description', 'dvds', 'seasons', 'episodes', 'duration', 'sentense', 'year', 'micro', 'ram', 'gpu', 'hdd', 'user_id', 'categories_id'];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function image()
    {
    	return $this->hasOne('App\Image');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }

    public function genders()
    {
    	return $this->belongsToMany('App\Gender');
    }

    public function languajes()
    {
    	return $this->belongsToMany('App\Languaje');
    }
    public function subtitles()
    {
    	return $this->belongsToMany('App\Subtitle');
    }
}
