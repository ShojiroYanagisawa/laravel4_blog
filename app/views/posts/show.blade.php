@extends('layouts.application')

@section('main')

<h1>{{{ $post->title }}}</h1>
<p>{{{ $post->body }}}</p>

<hr>

<a href="{{ action('PostsController@index') }}" class="btn btn-default">Back</a>

@stop
