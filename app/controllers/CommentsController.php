<?php

class CommentsController extends \BaseController {


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$attrs = Input::only(['body']);

		$post = Post::findOrFail($id);
		$comment = new Comment($attrs);

		if ($comment->validate($attrs)) {
		  $post->comments()->save($comment);

		  return Redirect::action('PostsController@show', $post->id)
		          ->with('message', 'Comment created successfully.');
		}

		return Redirect::action('PostsController@show', $post->id)
		        ->withErrors($comment->errors())
		        ->withInput();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy($post_id, $id)
	{
		$post = Post::findOrFail($post_id);
	    $post->comments()->findOrFail($id)->delete();

	    return Redirect::action('PostsController@show', $post->id)
	            ->with('message', 'Comment deleted successfully.');
	}


}
