<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "items";

    protected $fillable = ['title', 'description', 'dvds', 'seasons', 'episodes', 'duration', 'sentense', 'year', 'micro', 'ram', 'gpu', 'hdd', 'user_id', 'categories_id'];
}
