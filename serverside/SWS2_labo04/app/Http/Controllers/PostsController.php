<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Author;

class PostsController extends Controller {
  public function showPosts() {
    $posts = Post::all();
    return view('index', ['posts'=>$posts]);
  }
  public function showPost($id) {
    $post = Post::find($id);
    return view('post', ['post'=>$post]);
  }
  public function showComments($id) {
    return view('post');
  }
}
