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
      // TODO save messsage to flash
      return Redirect::action('PostsController@index')
              ->with('message', 'Post created successfully.');
    }

    return Redirect::action('PostsController@create')
            ->withErrors($this->post->errors())
            ->withInput();
  }
}
