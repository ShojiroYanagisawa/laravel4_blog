@extends('layouts.application')

@section('main')

<h1>Posts list</h1>

<table class="table">
  <thead>
    <tr>
      <th>Title</th>
      <th style="width: 60px;"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
      <tr>
        <td><a href="{{ action('PostsController@show', $post->id) }}">{{{ $post->title }}}</a></td>
        <td><a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-primary">Edit</a></td>
      </tr>
    @endforeach
  </tbody>
</table>

<hr />

<a href="{{ action('PostsController@create') }}" class="btn btn-primary">New Post</a>

@stop
