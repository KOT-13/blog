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
                <label for="image">Image</label>
                <input type="file" name="image">
                <p>Уведомление о форматах =)</p>
            </div>

            <button type="submit" class="btn btn-success form-control">Create</button>
            @include('layouts.errors')
        </form>
    </div>
@endsection