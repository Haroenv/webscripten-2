<?php
/**
 * Created by PhpStorm.
 * User: kevin.picalausa
 * Date: 26/04/2016
 * Time: 1:58
 */

namespace App\Http\Controllers;

use App\Blogpost;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class BlogController extends Controller
{
    public function overview()
    {
        $blogposts = Blogpost::orderBy('date', 'asc')
            ->join('users','blogposts.user_id', '=', 'users.user_id')
            ->join('categories','blogposts.category_id','=','categories.category_id')
            ->get();
        return view('blog.overview', [
            'blogposts' => $blogposts
        ]);
    }

    public function detail($id)
    {
        $blogpost = Blogpost::first()
            ->join('users','blogposts.user_id', '=', 'users.user_id')
            ->join('categories','blogposts.category_id','=','categories.category_id')
            ->find($id);
        return view('blog.detail', [
            'blogpost' => $blogpost
        ]);
    }

    public function comments($id)
    {
        $comments = Comment::where('blogpost_id', '=', $id)->get();
        $blogpost = Blogpost::find($id);

        return view('blog.comments', [
            'blogpost' => $blogpost,
            'comments' => $comments
        ]);
    }
}