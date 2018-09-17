@extends('admin.layouts.master')

@section('content')
    <form action="">
        {{ csrf_field() }}
        <input type="text" name="name" value="{{ old() }}">
    </form>
@endsection