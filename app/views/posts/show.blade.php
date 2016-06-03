@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="center-align">{{{ $post->title }}}</h1> 
        <h3>{{{ $post->description }}}</h3>
        <p>Posted On: {{{ $post->created_at }}} | Last Modified On: {{{ $post->updated_at }}}</p>
        <p class="flow-text">{{{ $post->body }}}</p> 
        <button class="btn"><a href="{{{ action('PostsController@edit', $post->id) }}}">Edit Your Post</a></button>
    </div> 

@stop