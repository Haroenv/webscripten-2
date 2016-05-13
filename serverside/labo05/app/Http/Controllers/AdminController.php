<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blogpost;
use App\Http\Requests;
use App\Policies\BlogpostPolicy;
use Auth;


class AdminController extends Controller
{
    
    public function overview()
    {
		$blogposts = Auth::user()->blogposts;

        return view('admin.overview', [
            'blogposts' => $blogposts
        ]);
    }

    public function add()
    {
        return view('admin.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:125',
            'blog_content' => 'required'
        ]);

        $request->user()->blogposts()->create([
            'title' => $request->title,
            'content' => $request->blog_content,
            'date' => (new \DateTime('now', new \DateTimeZone('UTC')))->format('Y-m-d H:i:s'),
            // AUTOMATICALLY ASSIGNED BY LARAVEL in this case: 'user_id' => Auth::user()->user_id,
            'numcomments' => 0,
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

        return view('admin.edit', [
            'blogpost' => $blogpost
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:125',
            'blog_content' => 'required'
        ]);

        $blogpost = Blogpost::find($request->id);
        $blogpost->title = $request->title;
        $blogpost->content = $request->blog_content;

        $blogpost->save();
        return redirect('/admin');
    }
}
