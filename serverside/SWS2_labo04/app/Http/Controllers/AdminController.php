<?php

namespace App\Http\Controllers;

use App\Blogpost;
use App\User;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function dashboard() {
        $blogposts = Blogpost::orderBy('user_id', 'asc')->get();

        return view('admin.dashboard', [
            'blogposts' => $blogposts
        ]);
    }
}
