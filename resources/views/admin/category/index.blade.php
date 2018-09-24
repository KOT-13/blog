@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2>All categories:</h2> <a href="{{ route('admin.category.create') }}" class="btn btn-success">Add new</a><hr>
        @foreach($categories as $category)
            <ul class="list-group">
                <li class="list-group-item">{{ $category->name }}
                    <a href="{{ route('admin.category.show', $category) }}" class="btn btn-primary form-control">Show</a>
                    <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-success form-control">Edit</a>
                    {!! Form::open(['url' => route('admin.category.destroy', $category), 'method' => 'delete']) !!}
                        {!! Form::submit('Delete!', ['class' => 'btn btn-danger form-control']); !!}
                    {!! Form::close() !!}
                </li>
            </ul>
        @endforeach

        {{ $categories->links() }}

    </div>
@endsection