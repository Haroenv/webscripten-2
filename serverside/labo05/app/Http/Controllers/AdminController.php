<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blogpost;
use App\Category;
use App\Http\Requests;
use App\Policies\BlogpostPolicy;
use Auth;


class AdminController extends Controller
{

    public function overview()
    {
		$blogposts = Auth::user()->blogposts;
        $categories = Category::lists('name', 'category_id');

        return view('admin.overview', [
            'blogposts' => $blogposts,
            'categories' => $categories,
        ]);
    }

    public function add()
    {
        $categories = Category::lists('name', 'category_id');
        return view('admin.add',[
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:125',
            'blog_content' => 'required',
            'category' => 'required',
        ]);

        $request->user()->blogposts()->create([
            'title' => $request->title,
            'content' => $request->blog_content,
            'date' => (new \DateTime('now', new \DateTimeZone('UTC')))->format('Y-m-d H:i:s'),
            // AUTOMATICALLY ASSIGNED BY LARAVEL in this case: 'user_id' => Auth::user()->user_id,
            'numcomments' => 0,
            'category_id' => $request->category,
        ]);

        return redirect('/admin');

    }

    public function delete(Request $request, Blogpost $id)
    {
        // Check if user is authorised to delete blogpost
        $this->authorize('destroy', $id);

        $id->delete();
        return redirect('/admin');
    }

    public function edit($id)
    {
        $blogpost = Blogpost::first()
            ->join('users','blogposts.user_id', '=', 'users.user_id')
            ->find($id);
        $categories = Category::lists('name', 'category_id');
        return view('admin.edit', [
            'blogpost' => $blogpost,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:125',
            'blog_content' => 'required',
            'category' => 'required',
        ]);

        $blogpost = Blogpost::find($request->id);
        $blogpost->title = $request->title;
        $blogpost->content = $request->blog_content;
        $blogpost->category_id = $request->category;

        $blogpost->save();
        return redirect('/admin');
    }
}
