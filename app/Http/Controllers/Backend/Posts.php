<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class posts extends BackEndController
{
    public function index()
    {
        $posts=Post::with('user')->get();;
        $posts = Post::paginate(10);
        return view('back-end.posts.index', compact('posts'));
    }

    public function create()
    {
        $users = User::get();
        return view('back-end.posts.create', compact('users'));
    }
    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'post' => $request->post,
            'user_id' => $request->user_id,
        ]);
        return redirect()->route('posts.index');
    }
    public function edit($id)
    {
        $post = Post::FindOrFail($id);
        $users = User::get();
        return view('back-end.posts.edit', compact('post','users'));
    }
    public function update($id, Request $request)
    {
        $Post = Post::FindOrFail($id);
        $requestArray= [
            'title' => $request->title,
            'post' => $request->post,
            'user_id' => $request->user_id,
        ];
        $Post->update($requestArray);
        return redirect()->route('posts.index');
    }
    public function destroy($id)
    {
         Post::FindOrFail($id)->delete();
        return redirect()->route('posts.index');    }
}
