<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.list', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        Session::flash('success', 'Tạo mới thể loại thành công');
        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $category=Category::findOrFail($id);
        return view('category.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $category=Category::findOrFail($id);

        $category->name = $request->input('name');
        $category->save();

        Session::flash('success', 'Chỉnh sửa thể loại thành công');
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        Session::flash('success', 'Xóa thể loại thành công');

        return redirect()->route('category.index');
    }
}
