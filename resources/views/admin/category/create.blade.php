@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <form action="{{ route('admin.category.store') }}" method="post" class="form form-group">
            {{ csrf_field() }}
            <label for="name">Category name:</label>
            <input class="form-control" type="text" name="name"><br>
            <label for="description">Category description:</label>
            <textarea class="form-control" name="description"></textarea><br>
            <button type="submit" class="btn btn-success form-control">Create</button>
        </form>
    </div>
@endsection