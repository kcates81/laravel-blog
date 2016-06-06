@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="center-align">Blog Posts</h1>  

        <div class="section">
            @foreach($posts as $post)
                <h2><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h2>
                <h3>{{{ $post->description }}}</h3>
                <p id="timestamp">Posted On: {{{ $post->created_at->setTimezone('America/Chicago')->format('D, M, j, Y @ h:i:s A') }}} | Last Modified On: {{{ $post->updated_at->setTimezone('America/Chicago')->format('D, M, j, Y @ h:i:s A') }}}</p>
                <p class="flow-text truncate">{{{ $post->body }}}</p>
                <div class="divider"></div>
            @endforeach  
        </div> 
        
        <ul class="pagination center-align">
            {{ $paginator->render() }}
        </ul>
       
    </div>
    
@stop
