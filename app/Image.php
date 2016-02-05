<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	protected $table = "images";

	protected $fillable = ['name', 'item_id'];    

	public function item()
	{
		return $this->hasOne('App\Item');
	}
}
