<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Laravel provide by default a protection against mass assignment security issues. That's why you have to manually define which fields could be "mass assigned" 
    protected $fillable = array('name');
	
	public function blogposts()
    {
        return $this->hasMany('App\Blogpost');
    }
}
