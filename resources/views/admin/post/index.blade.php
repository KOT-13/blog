@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2>All Posts:</h2>
        <a class="btn btn-success" href="{{ route('admin.post.create') }}">Create new Post</a><hr>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">User Id</th>
                <th scope="col">Title</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $posts as $post )
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->user_id }}</td>
                    <td>{{ $post->title }}</td>
                    <td><a href="#">Show</a></td>
                    <td><a href="#">Edit</a></td>
                    <form action="#" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <td><button type="submit" class="btn btn-link">Delete</button></td>
                    </form>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection