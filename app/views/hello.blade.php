@extends('layouts.master')

@section('content')
    <div class="parallax-container">
        <div class="parallax"><img src="img/html-coding.jpg"></div>
    </div>
    <div class="section white">
        <div class="row container">
            <img src="/img/headshot.jpeg">
            <h1 class="header">Kristen L. Cates, PMP</h1>
            <h3>Full-Stack Web Developer</h3>
            <p class="grey-text text-darken-3 lighten-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="img/html-coding.jpg"></div>
    </div>
@stop

@section('bottom-script')
    <script>
        $(document).ready(function(){
            $('.parallax').parallax();
        });
    </script>
@stop
