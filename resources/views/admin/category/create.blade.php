@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data" class="form form-group">
            {{ csrf_field() }}
            <label for="name">Category name:</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}"><br>
            <label for="description">Category description:</label>
            <textarea class="form-control" name="description">{{ old('description') }}</textarea><br>

            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success form-control">Create</button>
            @include('layouts.errors')
        </form>
    </div>
@endsection