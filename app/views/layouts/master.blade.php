<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
    <style type="text/css">
        .btn {
           background-color: #FF8A00 !important; 
        }

        h1 {
            font-weight: 200px;
        }
        h3 {
            color: #FF8A00;
        }

        .input-field input[type=text]:focus {
            border-bottom: 1px solid #03a9f4 !important;
            box-shadow: 0 1px 0 0 #03a9f4 !important;
       }

        .input-field label {
            color: #03a9f4 !important;
        }
            
        nav {
            background-color: #03a9f4 !important;
            height: 150px !important; 
        }
    </style>
    <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
     <!-- Materialize Icons -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo"><img src="/img/mylogo_white.png"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li class="active"><a href="{{action('PostsController@index')}}">Posts</a></li>
                <li class="active"><a href="{{action('PostsController@create')}}">Create a post?</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li class="active"><a href="{{action('PostsController@index')}}"">Posts</a></li>
                <li class="active"><a href="{{action('PostsController@create')}}"">Create a post</a></li>
            </ul>
        </div>
    </nav>

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
</body>
</html>