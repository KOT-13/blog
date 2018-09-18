@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2>Create new Post:</h2>

        <form method="post" action="{{ route('admin.post.store') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea type="text" name="body" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <select name="user_id">
                    <option value="" disabled selected>User created by</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>

    </div>
@endsection