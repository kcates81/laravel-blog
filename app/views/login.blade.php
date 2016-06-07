@extends('layouts.master')

@section('content')
    <h1 class="center-align">Login</h1>
    
    <div class="container">
        {{ Form::open(array('action' => array('HomeController@doLogin'), 'method' => 'POST')) }}
            {{ Form::token() }}
            <div>
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', null,  array('class' => 'form-control other-class another', 'placeholder' => 'Password')) }}
            </div>
            <div>
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', array('class' => 'form-control other-class another', 'placeholder' => 'Password') ) }} 
            </div>
            <div>
                <button type="submit" class="btn">Login</button> 
            </div>
        {{ Form::close() }}       
    </div>
@stop 