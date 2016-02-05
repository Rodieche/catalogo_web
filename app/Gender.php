<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = "genders";

    protected $fillable = ['name'];

    public function items()
    {
    	return $this->belongsToMany('App\Item');
    }
}
