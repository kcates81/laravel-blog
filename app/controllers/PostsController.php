<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->beforeFilter(function() {
			// Auth Check
		});
	}

	public function showMissing()
	{
		return View::make('errors.missing');
	}

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
		if (Auth::check()) {
			return View::make('posts.create');
		} else {
			return $this->showMissing();
		}
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = Post::validateAndCreate(Request::instance(), User::first());

		return Redirect::action('PostsController@show', $post->id)->withInput();	
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

		$post = Post::validateAndUpdate($post, Request::instance(), User::first());

		return Redirect::action('PostsController@show', $post->id)->withInput();
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
		if (Auth::check()) {
			$post = Post::find($id);
			return View::make('posts.edit')->with('post', $post);
		} else {
			return $this->showMissing();
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
		if (Auth::check()) {
			$post = Post::find($id);
			$post->delete();

			Session::flash('successMessage', 'Post has been deleted');
			return Redirect::action('PostsController@index', $post->id)->withInput();
		} else {
			return $this->showMissing();
		}
		
	}


}
