@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2>User info:</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection