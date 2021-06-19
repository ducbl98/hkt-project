<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        return view('post.list',compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $post = new Post();
        $post->name = $request->input('name');
        $post->tag = $request->input('tag');
        $post->category = $request->input('category');
        $post->content = $request->input('content');
        $post->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới khách hàng thành công');
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $post=Post::findOrFail($id);
        return view(post)
    }

    public function update(Request $request, $id)
    {

    }

    public function show($id)
    {

    }

    public function destroy($id)
    {

    }
}
