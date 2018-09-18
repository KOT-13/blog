@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2>Create new User:</h2>

        <form method="post" action="{{ route('admin.user.store') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

    </div>
@endsection