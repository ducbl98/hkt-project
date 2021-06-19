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
        return view('post.edit',compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->name = $request->input('name');
        $post->tag = $request->input('tag');
        $post->category = $request->input('category');
        $post->content = $request->input('content');
        $post->save();

        Session::flash('success', 'Cập nhật khách hàng thành công');

        return redirect()->route('post.index');
    }

    public function show($id)
    {
        $post=Post::findOrFail($id);
        return view('post.detail',compact('post'));
    }

    public function destroy($id)
    {

    }
}
