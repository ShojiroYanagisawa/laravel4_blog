@extends('layouts.application')

@section('main')

<h1>Edit Post</h1>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{{ $error }}}</li>
    @endforeach
  </ul>
</div>
@endif

{{ Form::model($post, array('method' => 'PATCH', 'route' => array('posts.update', $post->id))) }}
  <div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', $post->title, array('class' => 'form-control')) }}
  </div>
  <div class="form-group">
    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('body', $post->body, array('class' => 'form-control')) }}
  </div>

  <hr />

  {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
  <a href="{{ action('PostsController@index') }}" class="btn btn-default">Back</a>
{{ Form::close() }}

@stop
