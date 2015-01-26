@extends('layouts.application')

@section('main')

<h1>Posts list</h1>
<ul>
  @foreach ($posts as $post)
    <li><a href="{{ action('PostsController@show', $post->id) }}">{{{ $post->title }}}</a></li>
  @endforeach
</ul>

<hr />

<a href="{{ action('PostsController@create') }}" class="btn btn-primary">New Post</a>

@stop
