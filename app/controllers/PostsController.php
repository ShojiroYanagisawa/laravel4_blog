<?php

class PostsController extends BaseController
{
  public function index()
  {
    $posts = Post::all();
    return View:make('posts.index', ['posts' => $posts]);
  }

  public function show($id)
  {
    $post = Post::findOrFail($id);
    return View::make('posts.show', ['post' => $post]);
  }
}
