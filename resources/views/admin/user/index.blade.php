@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2>All Users:</h2>
        <a class="btn btn-success" href="{{ route('admin.user.create') }}">Create new user</a><hr>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach( $users as $user )
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="{{ route('admin.user.show', $user) }}">Show</a></td>
                <td><a href="{{ route('admin.user.edit', $user) }}">Edit</a></td>
                <form action="{{ route('admin.user.destroy', $user) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <td><button type="submit" class="btn btn-link">Delete</button></td>
                </form>
            </tr>
            </tbody>
            @endforeach
        </table>

        {{ $users->links() }}
    </div>
@endsection