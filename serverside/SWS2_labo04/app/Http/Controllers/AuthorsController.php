<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AuthorsController extends Controller {
  public function showAuthor($id) {
    return view('post');
  }
  public function showPosts($id) {
    return view('post');
  }
}
