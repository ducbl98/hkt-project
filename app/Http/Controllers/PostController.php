<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.list', compact('posts'));
    }

    public function create()
    {
        $categories=Category::all();
        return view('post.create',compact('categories'));
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $post = new Post();
        $post->name = $request->input('name');
        $post->tag = $request->input('tag');
        $post->category_id = $request->input('category_id');
        $post->content = $request->input('content');
        $post->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới bài viết thành công');
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories=Category::all();
        return view('post.edit', compact('post','categories'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->name = $request->input('name');
        $post->tag = $request->input('tag');
        $post->category_id = $request->input('category_id');
        $post->content = $request->input('content');
        $post->save();

        Session::flash('success', 'Cập nhật bài viết thành công');

        return redirect()->route('post.index');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.detail', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        Session::flash('success', 'Xóa bài viết thành công');

        return redirect()->route('post.index');
    }
}
