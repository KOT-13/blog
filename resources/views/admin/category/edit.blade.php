@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <form action="{{ route('admin.category.update', $category) }}" method="post" class="form form-group">
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="PATCH">
            
            <label for="name">Edit category name:</label>
            <input class="form-control" type="text" name="name" value="{{ $category->name }}"><br>
            <label for="description">Edit category description:</label>
            <textarea class="form-control" name="description">{{ $category->description }}</textarea><br>
            <button type="submit" class="btn btn-success form-control">Save changes</button>
        </form>
    </div>
@endsection