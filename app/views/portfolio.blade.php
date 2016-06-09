@extends('layouts.master')

@section('content')
    <h1 class="center-align">Portfolio Highlights</h1>
    <div class="slider">
        <ul class="slides">
            <li>
                <a href="https://github.com/greasy-blanket/adlister.dev" target="_blank"><img class="responsive-img" src="/img/screenshots/adlister.png"></a>
                <div class="caption left-align">
                    <h3><strong>Adlister Project</strong></h3>
                    <h5>Built using PHP, MySQL, HTML, Google's Materialize, and Custom CSS</h5>
                </div>
            </li>
            <li>
                <a href="https://github.com/kcates81/Codeup-Web-Exercises/blob/master/public/national_parks.php" target="_blank"><img class="responsive-img" src="/img/screenshots/national-parks.png"></a>
                <div class="caption right-align">
                    <h3><strong>National Parks Project</strong></h3>
                    <h5>Built using PHP, MySQL, HTML, Google's Materialize, and Custom CSS</h5>
                </div>
            </li>
            <li>
                <a href="https://github.com/kcates81/Codeup-Web-Exercises/blob/master/public/weather_map.js" target="_blank"><img class="responsive-img" src="/img/screenshots/weather.png"></a>
                <div class="caption right-align">
                    <h3><strong>Weather Map Project</strong></h3>
                    <h5>Built using jQuery, HTML, Google's Materialize, Custom CSS, Google Map API, and Open Weather Map API</h5>
                </div>
            </li>
        </ul>
    </div>
@stop

@section('bottom-script')
    <script>
        // slider
        $(document).ready(function(){
            $('.slider').slider({full_width: false});
        }); 
    </script>
@stop