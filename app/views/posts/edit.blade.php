@extends('layouts.master')

@section('content')
<h1>Edit Your Post</h1>

 <div class="container row">
        {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
            <div>
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', Input::old('title'), array('class' => 'form-control other-class another', 'placeholder' => 'Blog Title', 'value' => $post->title) ) }} 
            </div>
            <div>
                {{ Form::label('description', 'Tagline') }}
                {{ Form::text('description', Input::old('description'), array('class' => 'form-control other-class another', 'placeholder' => 'Brief Description', 'value' => $post->description) ) }} 
            </div>
            <div>
                {{ Form::label('body', 'Blog Content') }}
                {{ Form::textarea('body', Input::old('body'), array('class' => 'form-control other-class another materialize-textarea', 'value' => $post->body) ) }}   
            </div>
             <div class="file-field input-field">
                <div class="btn">
                    <span>Upload Image</span>
                    <input type="file" name="img_url" value="{{{ Input::old('img_url') }}}">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload an image">
                </div>
            </div>
            <div>
                <button type="submit" class="btn">Submit Post</button> 
                <!-- Modal Trigger -->
                <button data-target="modal1" class="btn modal-trigger">Delete Post</button>
            </div>
        {{ Form::close() }}   
                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <form method="POST" action="{{{action('PostsController@destroy', $post->id)}}}">
                    {{Form::token()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <div class="modal-content">
                            <h4>Are You Sure?</h4>
                            <p>If you delete this post, you won't be able to retrieve it!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn">Delete</button>
                            <button class="btn"><a href="{{{ action('PostsController@show', $post->id) }}}" class=" modal-action modal-close waves-effect waves-green btn-flat">Keep</a></button>
                        </div>
                    </form>
                    
                </div>    
@stop

@section('bottom-script')
    <script>
        $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();
          });
    </script>
@stop