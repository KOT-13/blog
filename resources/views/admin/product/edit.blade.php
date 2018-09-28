@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2>Edit Product:</h2>

        <form method="post" action="{{ route('admin.product.update', $product) }}" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PATCH">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Product Title</label>
                <input type="text" name="title" class="form-control" value="{{ $product->title }}">
            </div>

            <div class="form-group">
                <label for="description">Product description</label>
                <textarea type="text" name="description" class="form-control">{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" min="1" max="999" class="form-control" value="{{ $product->price }}">
            </div>

            <div class="form-group">
                <select name="category_id">
                    <option value="" disabled selected>Choose category</option>
                    @foreach( $categories as $category )
                        <option @if($category->id === $product->category_id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Save</button>

            @include('layouts.errors')

        </form>

    </div>
@endsection