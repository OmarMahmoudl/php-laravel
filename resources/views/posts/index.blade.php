@extends('layouts.app')

@section('content')

<ul>
    @foreach ($posts as $post)
    <div class="container">
        <img src="{{ $post->path }}" alt="{{ $post->title }}" width="100">
    </div>
        <li>
            <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
        </li>
    @endforeach
</ul>

@endsection
 