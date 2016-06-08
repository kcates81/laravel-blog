@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="center-align">{{{ $post->title }}}</h1> 
        <h3>{{{ $post->description }}}</h3>
        <p id="timestamp">Posted On: {{{ $post->created_at->setTimezone('America/Chicago')->format('D, M, j, Y @ h:i:s A') }}} | Last Modified On: {{{ $post->updated_at->setTimezone('America/Chicago')->format('D, M, j, Y @ h:i:s A') }}} | Written by: {{{ $post->user->username }}}</p>
        <img src="{{{ $post->img_url }}}">
        <p class="flow-text">{{ $post->body }}</p> 
        
        @if(Auth::check())
        <button class="btn"><a href="{{{ action('PostsController@edit', $post->id) }}}">Edit Your Post</a></button>
        @endif
    </div> 

@stop

@section('bottom-script')

@stop