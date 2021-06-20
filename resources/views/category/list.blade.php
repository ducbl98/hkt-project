@extends('category.master')
@section('title','Danh sách thể loại')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>Danh Sách bài viết</h1></div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <a class="btn btn-primary" href="{{ route('category.create') }}">Thêm mới</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên thể loại</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($categories as $key=>$category)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $category->name}}</td>
                        <td><a href="{{ route('category.edit', $category->id) }}">Sửa</a></td>
                        <td><a href="{{ route('post.delete', $category->id) }}" class="text-danger"
                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>
                    </tr>
                @empty
                    <p>No Data</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
