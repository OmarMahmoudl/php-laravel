@extends('layouts.app')

@section('content')

{{--
<form method="post" action="/posts/{{ $post->id }}">
    @csrf
    <input type="hidden" name="_method" value="PUT">

    <input type="text" name="title" value="{{ $post->title }}" placeholder="Enter Your Title">
    <input type="submit" name="submit" value="Update">
</form>
<form method="post" action="/posts/{{ $post->id }}">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" name="submit" value="Delete">
</form>
--}}

{!! Form::model($post, ['method' => 'PUT', 'action' => ['PostController@update', $post->id]]) !!}
    {!! Form::text('title', null, ['placeholder' => 'Enter Your Title']) !!}
    {!! Form::text('content', null, ['placeholder' => 'Enter content']) !!}
    {!! Form::number('user_id', null, ['placeholder' => 'User id']) !!}
    {!! Form::number('is_admin', null, ['placeholder' => '0 or 1']) !!}
    {!! Form::submit('Update') !!}
{!! Form::close() !!}

{!! Form::open(['method' => 'DELETE', 'action' => ['PostController@destroy', $post->id]]) !!}
    {!! Form::submit('Delete') !!}
{!! Form::close() !!}

@endsection
