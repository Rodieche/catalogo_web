<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtitle extends Model
{
    protected $table = "subtitles";

    protected $fillable = ['name'];

    public function items()
    {
    	return $this->belongsToMany('App\Item');
    }
}
   }
