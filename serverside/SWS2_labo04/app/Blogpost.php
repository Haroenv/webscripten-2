<?php

namespace App;

Use DB;
use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
