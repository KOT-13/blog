@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Categories:</h1>
        @foreach($categories as $category)
            <ul>
                <li>{{ $category->name }}</li>
            </ul>
        @endforeach
    </div>
@endsection