<?php

namespace App;

Use DB;
use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    //Laravel provide by default a protection against mass assignment security issues. That's why you have to manually define which fields could be "mass assigned" 
    protected $fillable = array('title', 'content', 'date', 'user_id', 'numcomments');

    public function user()
    {
        return $this->belongsTo('App\User');
    }
	
    public function category()
    {
		return $this->belongsTo('App\Category');
    }	
}
