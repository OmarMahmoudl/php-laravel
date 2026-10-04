@extends('layouts.app')

@section('content')



{!! Form::open(['method' => 'POST', 'action' => 'PostController@store']) !!}
    {!! Form::text('title', null, ['placeholder' => 'Enter Your Title']) !!}
    {!! Form::text('content', null, ['placeholder' => 'Enter content']) !!}
    {!! Form::number('user_id', null, ['placeholder' => 'User id']) !!}
    {!! Form::number('is_admin', null, ['placeholder' => '0 or 1']) !!}
    {!! Form::submit('submit') !!}
{!! Form::close() !!}

@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection