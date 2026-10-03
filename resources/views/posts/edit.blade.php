@extends('layouts.app')

@section('content')

<form method="post" action="/posts/{{ $post->id }}">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    
    <input type="text" name="title" value="{{ $post->title }}"placeholder="Enter Your Title">
    <input type="submit" name="submit "value="Update">
</form>
<form method="post" action="/posts/{{ $post->id }}">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" name="submit" value="Delete">
</form>
@endsection
