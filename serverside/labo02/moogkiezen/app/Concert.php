<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    protected $fillable = array('id', 'title', 'location', 'price', 'fav', 'start_date');
}
