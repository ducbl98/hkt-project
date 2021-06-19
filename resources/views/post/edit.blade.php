@extends('post.master')
@section('title', 'Chỉnh sửa bài viết')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="card" style="width: 100%">
                <div class="card-body">
                    <h5 class="card-title">
                        <div class="col-12">
                            <h1> Chỉnh sửa bài viết</h1>
                        </div>
                    </h5>
                    <div class="col-12">
                        <form method="post" action="{{route('post.update',$post->id)}}">
                            @csrf
                            <div class="form-group">
                                <label>Tên bài viết</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$post->name}}" required>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input type="text" class="form-control" name="tag" placeholder="Enter tag" value="{{$post->tag}}" required>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" class="form-control" name="category" placeholder="Enter Category" value="{{$post->category}}" required>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" name="content" rows="3" placeholder="Enter Content">{{$post->content}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

