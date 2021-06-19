@extends('home')
@section('title', 'Danh sách bài viết')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>Danh Sách bài viết</h1></div>
            <div class="col-12">
                {{--                @if (Session::has('success'))--}}
                {{--                    <p class="text-success">--}}
                {{--                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}--}}
                {{--                    </p>--}}
                {{--                @endif--}}
            </div>
            <a class="btn btn-primary" href="{{ route('post.create') }}">Thêm mới</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên bài viết</th>
                    <th scope="col">Tag</th>
                    <th scope="col">Thể Loại</th>
                </tr>
                </thead>
                <tbody>
                @forelse($posts as $key=>$post)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $post->name}}</td>
                        <td>{{ $post->tag }}</td>
                        <td>{{ $post->category}}</td>
{{--                        <td><a href="{{ route('post.edit', $post->id) }}">Sửa</a></td>--}}
{{--                        <td><a href="{{ route('post.destroy', $post->id) }}" class="text-danger"--}}
{{--                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>--}}
                    </tr>
                @empty
                    <p>No Data</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
