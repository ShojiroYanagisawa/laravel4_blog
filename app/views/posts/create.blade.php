@extends('layouts.application')

@section('main')

<h1>New Post</h1>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{{ $error }}}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{ action('PostsController@store') }}" method="post">
  {{ Form::token() }}

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{{ Input::old('title') }}}" placeholder="title" class="form-control">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" id="body" rows="3" class="form-control">{{{ Input::old('body') }}}</textarea>
  </div>

  <hr />

  <button type="submit" class="btn btn-primary">Post</button>
  <a href="{{ action('PostsController@index') }}" class="btn btn-default">Back</a>
</form>

@stop
