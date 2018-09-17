@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2>All categories:</h2> <a href="{{ route('admin.category.create') }}" class="btn btn-success">Add new</a>
        @foreach($categories as $category)
            <ul class="list-group">
                <li class="list-group-item">{{ $category->name }}
                    <button class="btn btn-primary">Show</button>
                    <button class="btn btn-primary">Edit</button>
                    {!! Form::open(['url' => route('admin.category.destroy', $category), 'method' => 'delete']) !!}
                        {!! Form::submit('Delete!', ['class' => 'btn btn-danger']); !!}
                    {!! Form::close() !!}
                </li>
            </ul>
        @endforeach
    </div>
@endsection