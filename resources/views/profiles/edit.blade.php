@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <h2>Editing {{ $user->name }}'s Profile</h2>



        <form method="post" action="{{ route('profile.profile.update', $user) }}">
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="PATCH">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value="{{ old('password') }}">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Password Confirmation:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            @include('layouts.errors')
        </form>

    </div>
@endsection