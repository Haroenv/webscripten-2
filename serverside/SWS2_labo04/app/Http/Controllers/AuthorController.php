<?php
/**
 * Created by PhpStorm.
 * User: kevin.picalausa
 * Date: 26/04/2016
 * Time: 1:58
 */

namespace App\Http\Controllers;

use App\Blogpost;
use App\User;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AuthorController extends Controller
{
    public function overview()
    {
        $authors = User::orderBy('user_id', 'asc')->get();

        return view('authors.overview', [
            'authors' => $authors
        ]);
    }

    public function detail($id)
    {
        $author = User::where('user_id', $id)->firstOrFail();

        return view('authors.detail', [
            'author' => $author
        ]);
    }

    public function comments($id)
    {
        $comments = Comment::where('blogpost_id', '=', $id)->get();
        $blogpost = Blogpost::find($id);

        return view('authors.comments', [
            'blogpost' => $blogpost,
            'comments' => $comments
        ]);
    }

    public function blogposts($id)
    {
        $blogposts = Blogpost::where('user_id', $id)->get();
        $author = User::find($id);

        return view('authors.blogposts', [
            'blogposts' => $blogposts,
            'author' => $author
        ]);
    }
}
