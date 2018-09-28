@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
         <p>Category: {{ $category->name }}</p>
        <h2>Products list:</h2>

        <ul class="list-group">
            @foreach($products as $product)
                <li class="list-group-item">
                    <p><b>Product name:</b></p>
                    <h3><a href="{{ route('category.products.products.show', compact('category', 'product')) }}">{{ $product->title }}</a></h3>
                </li>
            @endforeach
        </ul>

    </div>

@endsection