@extends('app')
@section('title', 'Title')

@section('content')
    {{Form::open(['action' => 'PostController@store'])}}
        @include('post._form')
    {{Form::close()}}
@endsection