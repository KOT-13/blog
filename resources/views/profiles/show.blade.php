@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h2>Hello, {{ $user->name }}! This is your profile:</h2>
        <hr>
        <h3>Name: {{ $user->name }}</h3>
        <h3>Email: {{ $user->email }}</h3>
        <h3>Registered: {{ $user->created_at->diffForHumans() }}</h3>
        <h3>Updated: {{ $user->updated_at->diffForHumans() }}</h3>
        <h3>Posts created: {{ $user->posts->count() }}</h3>

        <a href="{{ route('profile.profile.edit', $user) }}" class="btn btn-success">Edit</a>
        <a href="" class="btn btn-danger">Delete Account</a>
    </div>

@endsection