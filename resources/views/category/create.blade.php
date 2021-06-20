@extends('post.master')
@section('title', 'Thêm mới bài viết')

@section('content')
        <div class="row">
            <div class="card" style="width: 100%">
                <div class="card-body">
                    <h5 class="card-title">
                        <div class="col-12">
                            <h1>Thêm mới thể loại</h1>
                        </div>
                    </h5>
                    <div class="col-12">
                        <form method="post" action="{{route('category.store')}}">
                            @csrf
                            <div class="form-group">
                                <label>Tên bài viết</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

