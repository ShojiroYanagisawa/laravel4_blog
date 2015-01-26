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

{{ Form::open(array('route' => 'posts.store')) }}
  <div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', '', array('class' => 'form-control')) }}
  </div>
  <div class="form-group">
    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('body', '', array('class' => 'form-control')) }}
  </div>

  <hr />

  <button type="submit" class="btn btn-primary">Create</button>
  <a href="{{ action('PostsController@index') }}" class="btn btn-default">Back</a>
{{ Form::close() }}

@stop
