@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2>All Comments:</h2>
        <a class="btn btn-success" href="{{ route('admin.comment.create') }}">Create new comment</a><hr>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Body</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $comments as $comment )
                <tr>
                    <th scope="row">{{ $comment->id }}</th>
                    <td>{{ $comment->body }}</td>
                    <td><a href="{{ route('admin.comment.show', $comment) }}">Show</a></td>
                    <td><a href="{{ route('admin.comment.edit', $comment) }}">Edit</a></td>
                    <form action="{{ route('admin.comment.destroy', $comment) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <td><button type="submit" class="btn btn-link">Delete</button></td>
                    </form>
                </tr>
            </tbody>
            @endforeach
        </table>

        {{ $comments->links() }}

    </div>
@endsection