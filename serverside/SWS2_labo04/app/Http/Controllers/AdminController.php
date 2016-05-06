<?php

namespace App\Http\Controllers;

use App\Blogpost;
use App\User;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Auth;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function dashboard() {
        $blogposts = Blogpost::where('user_id','=',Auth::user()->user_id)
        ->orderBy('id', 'asc')
        ->get();

        return view('admin.dashboard', [
            'blogposts' => $blogposts
        ]);
    }

    public function add() {
      return view('admin.add', [
      ]);
    }

    public function delete($id) {
      $blogpost = Blogpost::orderBy('id', 'asc')->get();
      return view('admin.delete', [
        'post' => $blogpost
      ]);
    }
}
