@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2>Edit comment:</h2>

        <form method="post" action="{{ route('admin.comment.update', $comment) }}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PATCH">

            <div class="form-group">
                <select name="user_id">
                    <option value="{{ $comment->user_id }}" disabled selected>{{ $comment->user->name }}</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="post_id">Post ID</label>
                <select name="post_id">
                    <option value="{{ $comment->post_id }}" disabled selected>{{ $comment->post_id }}</option>
                    @foreach($posts as $post)
                        <option value="{{ $post->id }}">{{ $post->id }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="body">Comment</label>
                <textarea type="text" name="body" class="form-control">{{ $comment->body }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>
@endsection