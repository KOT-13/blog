@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2>Comment info:</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User id</th>
                <th scope="col">User</th>
                <th scope="col">Post id</th>
                <th scope="col">Post</th>
                <th scope="col">Body</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{ $comment->id }}</th>
                <td>{{ $comment->user->id }}</td>
                <td>{{ $comment->user->name }}</td>
                <td>{{ $comment->post_id }}</td>
                <td>{{ $comment->post->title }}</td>
                <td>{{ $comment->body }}</td>
                <td>{{ $comment->created_at}}</td>
                <td>{{ $comment->updated_at}}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection