@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="center-align">Blog Posts</h1>  
        <div id="post-box" class="col s12 m8 l9 ">
            @foreach($posts as $post)
                <h2><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h2>
                <h3>{{{ $post->description }}}</h3>
                <p id="timestamp">Posted On: {{{ $post->created_at->setTimezone('America/Chicago')->format('D, M, j, Y @ h:i:s A') }}} | Last Modified On: {{{ $post->updated_at->setTimezone('America/Chicago')->format('D, M, j, Y @ h:i:s A') }}} | Written by: {{{ $post->user->username }}}</p>
                <div class="text-editor">
                    <p class="flow-text truncate">{{ $post->body }}</p>
                </div>
                
                <div class="divider"></div>
            @endforeach  
        </div> 
        <div id="twitter-box" class="col s12 m4 l3">
             <a class="twitter-timeline" data-width="500" data-height="1000" href="https://twitter.com/kriscates81">Tweets by kriscates81</a> 
        </div>
        
        <ul class="pagination center-align">
            {{ $paginator->render() }}
        </ul>
    </div> 
@stop

@section('bottom-script')
    <script>
         $(function() {
            $('.text-editor p').addClass('flow-text');    
        });    
    </script>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
@stop