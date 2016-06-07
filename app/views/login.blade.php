@extends('layouts.master')

@section('content')
    <h1>Login</h1>

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
@stop 