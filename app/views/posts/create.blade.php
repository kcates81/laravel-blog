@extends('layouts.master')

@section('content')
    
    <div class="container row">
        <h1 class="center-align">Create a Blog Post</h1>

        <div id="errors">
            <h3>{{ $errors->first('title', '<span class="help-block">:message</span>') }}</h3>
            <h3>{{ $errors->first('body', '<span class="help-block">:message</span>') }}</h3>
        </div>
        
        {{ Form::open(array('action' => 'PostsController@store', 'files' => true)) }}
            <div>
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', Input::old('title'), array('class' => 'form-control other-class another', 'placeholder' => 'Blog Title') ) }} 
            </div>
            <div>
                {{ Form::label('description', 'Tagline') }}
                {{ Form::text('description', Input::old('description'), array('class' => 'form-control other-class another', 'placeholder' => 'Brief Description') ) }} 
            </div>
            <div>
                {{ Form::label('body', 'Blog Content') }}
                {{ Form::textarea('body', Input::old('body'), array('class' => 'form-control other-class another materialize-textarea') ) }}   
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
            </div>
        {{ Form::close() }}   
    </div>
@stop

@section('bottom-script')
     <script>
        tinymce.init({ selector:'textarea' });
     </script>
@stop