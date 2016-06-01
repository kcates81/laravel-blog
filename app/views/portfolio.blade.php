@extends('layouts.master')

@section('content')
    <h1>{{{$name}}}</h1>
    <a href="{{{ action('HomeController@showResume')}}}">Resume</a>
@stop