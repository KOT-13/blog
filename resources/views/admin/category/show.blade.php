@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h3>Category name:</h3> <strong>{{ $category->name }}</strong>
        <hr>
        <h3>Category description:</h3>{{ $category->description }}
        <h4>Image:</h4>
        <div style="max-width: 250px">
            <img style="width: 100%" src="{{ $category->image_path }}" alt="">
        </div>
        <hr>
        <h6>Category ID:</h6> {{ $category->id }}
        <h6>Created at:</h6> {{ $category->created_at }}
        <h6>Updated at:</h6> {{ $category->updated_at }}
    </div>
@endsection