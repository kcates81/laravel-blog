@extends('layouts.master')

@section('content')
    <div class="parallax-container">
        <div class="parallax"><img src="img/html-coding.jpg"></div>
    </div>
    <div class="section white">
        <div class="row container">
            <div class="col s2">
                <img src="/img/headshot.jpeg">   
            </div>
            <div class="col s10">
                <h1 class="header">Kristen L. Cates, PMP</h1>
                <h3>Full-Stack Web Developer</h3>
                <p class="grey-text text-darken-3 lighten-3">Entry-level LAMP+J Developer transitioning from a 10+ year career in proposal/project management and business development. </p>   
            </div>
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
