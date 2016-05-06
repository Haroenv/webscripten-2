<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
  protected $fillable = array('id', 'title', 'content', 'date', 'author_id', 'numcomments', 'created_at', 'updated_at');
}
