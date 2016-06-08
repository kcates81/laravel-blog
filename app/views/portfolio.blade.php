@extends('layouts.master')

@section('content')
    <h1 class="center-align">Portfolio Highlights</h1>
    <div class="slider">
        <ul class="slides">
            <li>
                <a href="https://github.com/greasy-blanket/adlister.dev" target="_blank"><img src="/img/screenshots/adlister.png"></a>
            </li>
            <li>
                <a href="https://github.com/kcates81/Codeup-Web-Exercises/blob/master/public/national_parks.php" target="_blank"><img src="/img/screenshots/national-parks.png"></a>
            </li>
            <li>
                <a href="https://github.com/kcates81/Codeup-Web-Exercises/blob/master/public/weather_map.js" target="_blank"><img src="/img/screenshots/weather.png"></a>
            </li>
        </ul>
    </div>
@stop

@section('bottom-script')
    <script>
        // slider
        $(document).ready(function(){
            $('.slider').slider({full_width: true});
        }); 
    </script>
@stop