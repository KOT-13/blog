@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2>Create new comment:</h2>

        <form method="post" action="{{ route('admin.comment.store') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <select name="user_id">
                    <option value="" disabled selected>User commented</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <select name="post_id">
                    <option value="" disabled selected>Post-ID commented</option>
                    @foreach($posts as $post)
                        <option value="{{ $post->id }}">{{ $post->id }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="body">Comment</label>
                <textarea type="text" name="body" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>

            @include('layouts.errors')

        </form>

    </div>
@endsection