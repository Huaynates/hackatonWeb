<!DOCTYPE html>
<html lang="es">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a modern responsive CSS framework based on Material Design by Google. ">
    <title> H2O </title>
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/favicon/apple-touch-icon-152x152.png')}}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/mstile-144x144.png')}}">
    <link rel="icon" href="{{ asset('assets/images/favicon/favicon-32x32.png')}}" sizes="32x32">
    <meta name="theme-color" content="#EE6E73">
    
    <link href="{{ asset('assets/css/prism.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/ghpages-materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
      window.liveSettings = {
        api_key: "a0b49b34b93844c38eaee15690d86413",
        picker: "bottom-right",
        detectlang: true,
        dynamic: true,
        autocollect: true
      };
    </script>
    <script src="{{ asset('assets/cdn.transifex.com/live.js')}}"></script>
  </head>
  <body>
    <header>
      <div class="fixed-announcement">
        <div class="announcement">
          <ul id="dropdown2" class="dropdown-content">
            <li><a href="#!">Mi perfíl</a></li>
            <li><a href="#!">EditarPerfíl</a></li>
            <li>
            <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  Cerrar Sesión
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            </li>
          </ul>
          <a class="btn dropdown-button" href="#!" data-activates="dropdown2">Perfíl de Usuario<i class="material-icons right">arrow_drop_down</i></a>
        </div>
      </div>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons">menu</i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">
        <li class="logo"><a id="logo-container" href="index.html" class="brand-logo">
            <object id="front-page-logo" type="image/svg+xml" data="{{ asset('assets/res/materialize.svg')}}">Your browser does not support SVG</object></a></li>
        <li class="search">
          <div class="search-wrapper card">
            <input id="search"><i class="material-icons">search</i>
            <div class="search-results"></div>
          </div>
        </li>
        <li class="bold"><a href="about.html" class="waves-effect waves-teal">Galería</a></li>
        <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Registro</a></li>
        <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Recomendaciones</a></li>
        <li class="bold"><a href="mobile.html" class="waves-effect waves-teal">Publicar</a></li>
        <li class="bold"><a href="showcase.html" class="waves-effect waves-teal">Sbaer más</a></li>
      </ul>
      <div class="patreon-ad"><a href="#" target="_blank" class="waves-effect">Cuidar el agua, más que nunca</a></div>
    </header>
    <main>
      <div class="container">
         
      </div>
    </main>

    <!--  Scripts-->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-3.2.1.min.html"><\/script>'); }
    </script>
    <script src="{{ asset('assets/js/jquery.timeago.min.js')}}"></script>
    <script src="{{ asset('assets/js/prism.js')}}"></script>
    <script src="{{ asset('assets/jade/lunr.min.js')}}"></script>
    <script src="{{ asset('assets/jade/search.js')}}"></script>
    <script src="{{ asset('assets/bin/materialize.js')}}"></script>
    <script src="{{ asset('assets/js/init.js')}}"></script>
    <!-- Twitter Button -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <!-- Google Plus Button-->
    <script src="{{ asset('assets/js/platform.js')}}" async defer></script>

    <!--  Google Analytics  -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56218128-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
    </script>

  </body>

<!-- Mirrored from materializecss.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Dec 2017 21:15:11 GMT -->
</html>