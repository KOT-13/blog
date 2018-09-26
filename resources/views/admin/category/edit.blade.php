@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <form action="{{ route('admin.category.update', $category) }}" method="post" class="form form-group" enctype="multipart/form-data">
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="PATCH">
            
            <label for="name">Edit category name:</label>
            <input class="form-control" type="text" name="name" value="{{ $category->name }}"><br>
            <label for="description">Edit category description:</label>
            <textarea class="form-control" name="description">{{ $category->description }}</textarea><br>

            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success form-control">Save changes</button>
            @include('layouts.errors')
        </form>
    </div>
@endsection