@extends('layouts.application')

@section('main')

<h1>{{{ $post->title }}}</h1>
<p>{{{ $post->body }}}</p>

<hr>

<h2>Comment</h2>

<table class="table">
    @foreach ($comments as $comment)
        <tr>
            <td>{{{ $comment->body }}}</td>
            <td style="width: 10%">
                {{ Form::open(array('method' => 'DELETE', 'route' => array('posts.comments.destroy', $post->id, $comment->id))) }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-xs')) }}
                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
</table>

<hr>

<h2>New Comment</h2>

{{ Form::open(array('method' => 'POST', 'route' => array('posts.comments.store', $post->id))) }}
    <div class="form-group">
    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('body', '', array('class' => 'form-control', 'rows' => 3)) }}
    </div>

    {{ Form::submit('Comment', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

<hr>

<a href="{{ action('PostsController@index') }}" class="btn btn-default">Back</a>

@stop
