<?php

class PostsController extends BaseController
{
  protected $post;

  public function __construct(Post $post)
  {
    $this->post = $post;
  }

  public function index()
  {
    $posts = $this->post->all();
    return View::make('posts.index', ['posts' => $posts]);
  }

  public function show($id)
  {
    $post = $this->post->findOrFail($id);
    return View::make('posts.show', ['post' => $post]);
  }

  public function create()
  {
    return View::make('posts.create');
  }

  public function store()
  {
    $attrs = Input::only(['title', 'body']);

    if ($this->post->validate($attrs)) {
      $this->post->create($attrs);

      return Redirect::action('PostsController@index')
              ->with('message', 'Post created successfully.');
    }

    return Redirect::action('PostsController@create')
            ->withErrors($this->post->errors())
            ->withInput();
  }

  public function edit($id)
  {
    $post = $this->post->findOrFail($id);
    return View::make('posts.edit', ['post' => $post]);
  }

  public function update($id)
  {
    $attrs = Input::only(['title', 'body']);

    if ($this->post->validate($attrs)) {
      $post = $this->post->findOrFail($id);
      $post->update($attrs);

      return Redirect::action('PostsController@show', $id)
              ->with('message', 'Post updated successfully.');
    }

    return Redirect::action('PostsController@edit', $id)
            ->withErrors($this->post->errors())
            ->withInput();
  }
}
