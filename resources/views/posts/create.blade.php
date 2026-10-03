@extends('layouts.app')

@section('content')



<!-- <form method="POST" action="/posts"> -->
{!! Form::open(['method' => 'POST', 'action' => 'PostController@store']) !!} 

    @csrf
    <input type="text" name="title" placeholder="Enter Your Title">
    <input type="text" name="content" placeholder="Enter content">
    <input type="number" name="user_id" placeholder="User id">
    <input type="number" name="is_admin" placeholder="0 or 1">
    <input type="submit" name="submit">
<!-- </form> -->

@endsection



{!! Form::open([''])!!}