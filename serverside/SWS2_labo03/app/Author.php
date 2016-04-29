<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {
  protected $fillable = array('id','firstname','lastname','email','website','location','password','created_at','updated_at');
}
