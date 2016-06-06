<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(4);
    	$paginator = new MaterializePresenter($posts);

		return View::make('posts.index')->with('posts', $posts)->with('paginator', $paginator);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$destinationPath = 'uploads';
		$post = new Post();
		$post->title = Input::get('title');
		$post->user_id = User::first()->id;
		$post->description = Input::get('description');
		$post->body = Input::get('body');
		$post->img_url = Input::file('img_url');
		// dd($post->img_url);

		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	    	Session::flash('errorMessage', 'Post has failed');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        if ($post->save()) {
	        	Session::flash('successMessage', 'Post has been saved');
				return Redirect::action('PostsController@show', $post->id)->withInput();
			}else {
				return Redirect::back()->withInput();
			}
	    }	
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		$post->title = Input::get('title');
		$post->user_id = User::first()->id;
		$post->description = Input::get('description');
		$post->body = Input::get('body');
		$post->img_url = Input::get('img_url');
		
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	    	Session::flash('errorMessage', 'Post has failed');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        if ($post->save()) {
	        	Session::flash('successMessage', 'Post has been updated');
				return Redirect::action('PostsController@show', $post->id)->withInput();
			}else {
				return Redirect::back()->withInput();
			}
	    }		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();

		Session::flash('successMessage', 'Post has been deleted');
		return Redirect::action('PostsController@index', $post->id)->withInput();
	}


}
