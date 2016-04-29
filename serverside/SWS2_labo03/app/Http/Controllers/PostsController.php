<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller {
  public function showPosts() {
    return view('index');
  }
  public function showPost($id) {
    return view('post');
  }
  public function showComments($id) {
    return view('post');
  }
}
