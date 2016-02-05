<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Languaje extends Model
{
    protected $table = "languajes";

    protected $fillable = ['name'];

    public function items()
    {
    	return $this->belongsToMany('App\Item');
    }
}
