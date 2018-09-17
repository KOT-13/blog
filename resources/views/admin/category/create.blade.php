@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
    <form action="{{ route('admin.category.store') }}" method="post">
        {{ csrf_field() }}
        <label for="name">Category name:</label>
        <input type="text" name="name"><br>
        <label for="description">Category description:</label>
        <input type="text" name="description">
        <button type="submit" class="btn btn-success">Add this</button>
    </form>
    </div>
@endsection