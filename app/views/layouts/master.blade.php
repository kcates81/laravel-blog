<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/blog_main.css">
    <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
     <!-- Materialize Icons -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="{{action('PostsController@index')}}" class="brand-logo"><img src="/img/mylogo_white.png"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li class="active"><a href="{{action('PostsController@index')}}">Posts</a></li>
                <li class="active"><a href="{{action('PostsController@create')}}">Create a post</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li class="active"><a href="{{action('PostsController@index')}}"">Posts</a></li>
                <li class="active"><a href="{{action('PostsController@create')}}"">Create a post</a></li>
            </ul>
        </div>
    </nav>

    @if (Session::has('successMessage'))
        <div class="alert alert-success">
            <p class="flow-text center-align" id="alert">{{{ Session::get('successMessage') }}}</p>
        </div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif

    @yield('content')

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script>
        $( document ).ready(function(){
            $(".button-collapse").sideNav();
        })
    </script>
    @yield('bottom-script')
</body>
</html>