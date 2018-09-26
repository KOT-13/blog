@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Categories:</h1>
        @foreach($categories as $category)
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('category.products.products.index', $category) }}">{{ $category->name }}</a></li>
            </ul>
        @endforeach
    </div>
@endsection