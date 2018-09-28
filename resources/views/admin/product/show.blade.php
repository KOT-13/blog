@extends('admin.layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

        <h2>Product info:</h2>

        <ul class="list-group">

            <li class="list-group-item">
                <p><b>Title:</b></p>
                {{ $product->title }}
            </li>
            <li class="list-group-item">
                <p><b>Description:</b></p>
                {{ $product->description }}
            </li>
            <li class="list-group-item">
                <p><b>Price:</b></p>
                {{ $product->price }}
            </li>
            @if($product->image)
                <li class="list-group-item">
                    <p><b>Image:</b></p>
                    <img src="{{ $product->image_path }}" alt="">
                </li>
            @endif
        </ul>

    </div>

@endsection