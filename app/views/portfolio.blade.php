@extends('layouts.master')

@section('content')
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="/img/screenshots/adlister.png">
                <div class="caption center-align">
                    <h3>Adlister Project</h3>
                    <h5 class="light grey-text text-lighten-3">Checkout the Code on GitHub</h5>
            </div>
            </li>
            <li>
                <img src="/img/screenshots/national-parks.png">
                <div class="caption left-align">
                    <h3>National Parks Project</h3>
                    <h5 class="light grey-text text-lighten-3">Checkout the Code on GitHub</h5>
                </div>
            </li>
            <li>
                <img src="/img/screenshots/weather.png"> <!-- random image -->
                <div class="caption right-align">
                    <h3>Right Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Checkout the Code on GitHub</h5>
                </div>
            </li>
            <li>
                <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Checkout the Code on GitHub</h5>
            </div>
            </li>
        </ul>
    </div>
@stop

@section('bottom-script')
    <script>
        $(document).ready(function(){
            $('.slider').slider({full_width: true});
        }); 
    </script>
@stop