@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2>All Products:</h2>
        <a class="btn btn-success" href="{{ route('admin.product.create') }}">Add new Product</a><hr>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $products as $product )
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->price }}</td>
                    <td><a href="{{ route('admin.product.show', $product) }}">Show</a></td>
                    <td><a href="{{ route('admin.product.edit', $product) }}">Edit</a></td>
                    <form action="{{ route('admin.product.destroy', $product) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <td><button type="submit" class="btn btn-link">Delete</button></td>
                    </form>
                </tr>
            </tbody>
            @endforeach
        </table>



    </div>
@endsection