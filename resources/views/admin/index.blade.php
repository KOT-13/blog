@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <h2>All users: {{ $users }}</h2> <a href="{{ route('admin.user.index') }}">Show</a>


        <hr>
        <h2>All categories: {{ $categories }}</h2> <a href="{{ route('admin.category.index') }}">Show</a>

        <hr>
        <h2>All posts: {{ $posts }}</h2> <a href="{{ route('admin.post.index') }}">Show</a>


        <hr>
        <h2>All comments: {{ $comments }}</h2> <a href="">Show</a>


    </div>
@endsection