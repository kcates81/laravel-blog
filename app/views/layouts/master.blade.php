<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Page Tab Icon -->
    <link href="/img/mylogo-owlonly.png">
    <title>Kristen L. Cates, PMP</title>
    <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/blog_main.css">
     <!-- Materialize Icons -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Font Awesome Icons -->
     <script src="https://use.fontawesome.com/b0b940d6f4.js"></script>
     <!-- Text Editor CDN -->
     <script src="//cdn.tinymce.com/4/tinymce.min.js"></script> 
     <!--website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="{{action('HomeController@showWelcome')}}" class="brand-logo"><img src="/img/mylogo_white.png"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li class="active"><a href="{{action('HomeController@showResume')}}">Resume</li>
                <li class="active"><a href="{{action('HomeController@showPortfolio')}}">Portfolio</li>
                <li class="active"><a href="{{action('PostsController@index')}}">Blog</a></li>
                @if(Auth::check())
                <li class="active"><a href="{{action('PostsController@create')}}">Create a post</a></li>
                @endif
                
                @if(Auth::check())
                <li class="active"><a href="{{action('HomeController@showLogout')}}">Logout</a></li>
                @else
                <li class="active"><a href="{{action('HomeController@showLogin')}}">Login</a></li>
                @endif

            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li class="active"><a href="{{action('HomeController@showResume')}}">Resume</li>
                <li class="active"><a href="{{action('HomeController@showPortfolio')}}">Portfolio</li>
                <li class="active"><a href="{{action('PostsController@index')}}"">Blog</a></li>
                @if(Auth::check())
                <li class="active"><a href="{{action('PostsController@create')}}">Create a post</a></li>
                @endif
                
                @if(Auth::check())
                <li class="active"><a href="{{action('HomeController@showLogout')}}">Logout</a></li>
                @else
                <li class="active"><a href="{{action('HomeController@showLogin')}}">Login</a></li>
                @endif
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

    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Contact Me</h5>
                <p class="grey-text text-lighten-4"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;11935 Travis Path<br>San Antonio, TX 78253<br><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;210.278.8717<br><a class="grey-text text-lighten-3" href="mailto:kriscates81@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;kriscates81@gmail.com</a></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Online Presence</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="https://github.com/kcates81" target="_blank"><i class="fa fa-github" aria-hidden="true"></i>&nbsp;kcates81</a></li>
                    <li><a class="grey-text text-lighten-3" href="https://twitter.com/kriscates81" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp;@kriscates81</a></li>
                    <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/kristenladonacates" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i>&nbsp;kristenladonacates</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Kristen L. Cates, PMP
            <a class="grey-text text-lighten-4 right" href="{{ action('HomeController@showAbout')}}">About this Site</a>
            </div>
          </div>
        </footer>

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