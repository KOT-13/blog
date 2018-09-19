@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2>Edit Post:</h2>

        <form method="post" action="{{ route('admin.post.update', $post) }}">
            <input type="hidden" name="_method" value="PATCH">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea type="text" name="body" class="form-control">{{ $post->body }}</textarea>
            </div>

            <div class="form-group">
                <select name="user_id">
                    <option value="{{ $post->user->id }}" disabled selected>{{ $post->user->name }}</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>
@endsection