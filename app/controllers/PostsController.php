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
}
