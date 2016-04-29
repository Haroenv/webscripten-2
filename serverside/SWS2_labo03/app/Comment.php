<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
  protected $fillable = array('id','blogpost_id','content','date','author','email','created_at','updated_at');
}
