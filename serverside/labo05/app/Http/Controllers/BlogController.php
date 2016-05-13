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
use App\Category;
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

    public function search(Request $request)
    {
        // $all = Category::all();
        // $categories = array();
        // foreach ($all as $category => $value) {
        //     $categories[$value->category_id] = $value->name;
        // }
        $request->flash();
        $categories = Category::lists('name', 'category_id');
        $results = Blogpost::orderBy('date', 'asc')
            ->join('users','blogposts.user_id', '=', 'users.user_id')
            ->join('categories','blogposts.category_id','=','categories.category_id');
        if ($request->q) {
            $results = $results->where('title', 'like', '%'.$request->q.'%');
        }
        if ($request->from) {
            $results = $results->where('date', '>', $request->from);
        }
        if ($request->to) {
            $results = $results->where('date', '<', $request->to);
        }
        if ($request->category) {
            $results = $results->where('categories.category_id','=',$request->category);
        }
        $results = $results->get();
        return view('blog.search', [
            'categories' => $categories,
            'blogposts' => $results,
        ]);
    }
}
