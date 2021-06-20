@extends('post.master')
@section('title', 'Thêm mới bài viết')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="card" style="width: 100%">
                <div class="card-body">
                    <h5 class="card-title">
                        <div class="col-12">
                            <h1>Thêm mới bài viết</h1>
                        </div>
                    </h5>
                    <div class="col-12">
                        <form method="post" action="{{route('post.store')}}">
                            @csrf
                            <div class="form-group">
                                <label>Tên bài viết</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input type="text" class="form-control" name="tag" placeholder="Enter tag" required>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" name="content" rows="3" placeholder="Enter Content" id="post-editor"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        ClassicEditor
            .create( document.querySelector( '#post-editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

