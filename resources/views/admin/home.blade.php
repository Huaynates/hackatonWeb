<!DOCTYPE html>
<html lang="es">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a modern responsive CSS framework based on Material Design by Google. ">
    <title>H2O</title>
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
          <div class="container center">1.0 alpha has been released!<a href="https://medium.com/@materializecss/materialize-to-1-0-and-beyond-e0233b8ac15" target="_blank" class="btn white waves-effect"> Learn More</a><a href="http://next.materializecss.com/" class="btn white waves-effect"> 1.0 Docs</a></div>
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
        <li class="bold"><a href="about.html" class="waves-effect waves-teal">About</a></li>
        <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Getting Started</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">CSS</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="color.html">Color</a></li>
                  <li><a href="grid.html">Grid</a></li>
                  <li><a href="helpers.html">Helpers</a></li>
                  <li><a href="media-css.html">Media</a></li>
                  <li><a href="pulse.html">Pulse</a></li>
                  <li><a href="sass.html">Sass</a></li>
                  <li><a href="shadow.html">Shadow</a></li>
                  <li><a href="table.html">Table</a></li>
                  <li><a href="css-transitions.html">Transitions</a></li>
                  <li><a href="typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Components</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="badges.html">Badges</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="breadcrumbs.html">Breadcrumbs</a></li>
                  <li><a href="cards.html">Cards</a></li>
                  <li><a href="chips.html">Chips</a></li>
                  <li><a href="collections.html">Collections</a></li>
                  <li><a href="footer.html">Footer</a></li>
                  <li><a href="forms.html">Forms</a></li>
                  <li><a href="icons.html">Icons</a></li>
                  <li><a href="navbar.html">Navbar</a></li>
                  <li><a href="pagination.html">Pagination</a></li>
                  <li><a href="preloader.html">Preloader</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">JavaScript</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="carousel.html">Carousel</a></li>
                  <li><a href="collapsible.html">Collapsible</a></li>
                  <li><a href="dialogs.html">Dialogs</a></li>
                  <li><a href="dropdown.html">Dropdown</a></li>
                  <li><a href="feature-discovery.html">FeatureDiscovery</a></li>
                  <li><a href="media.html">Media</a></li>
                  <li><a href="modals.html">Modals</a></li>
                  <li><a href="parallax.html">Parallax</a></li>
                  <li><a href="pushpin.html">Pushpin</a></li>
                  <li><a href="scrollfire.html">ScrollFire</a></li>
                  <li><a href="scrollspy.html">Scrollspy</a></li>
                  <li><a href="side-nav.html">SideNav</a></li>
                  <li><a href="tabs.html">Tabs</a></li>
                  <li><a href="transitions.html">Transitions</a></li>
                  <li><a href="waves.html">Waves</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="bold"><a href="mobile.html" class="waves-effect waves-teal">Mobile</a></li>
        <li class="bold"><a href="showcase.html" class="waves-effect waves-teal">Showcase</a></li>
        <li class="bold"><a href="themes.html" class="waves-effect waves-teal">Themes</a></li>
      </ul>
      <div class="patreon-ad"><a href="https://www.patreon.com/materialize" target="_blank" class="waves-effect">Become a Patron</a></div>
    </header>
    <main>      <div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <h1 class="header center-on-small-only">Materialize</h1>
          <div class='row center'>
            <h4 class ="header col s12 light center">A modern responsive front-end framework based on Material Design</h4>
          </div>
          <div class="row center">
            <a href="getting-started.html" id="download-button" class="btn-large waves-effect waves-light">Get Started</a>
          </div>
          <div class="row center"><a class="red-text text-lighten-4" href="https://github.com/Dogfalo/materialize">beta release v0.100.2</a></div>

          <div class="buysellads-header buysellads-homepage row center">
            <!-- CarbonAds Zone Code -->
            <script async type="text/javascript" src="../cdn.carbonads.com/carbon2f75.js?zoneid=1673&amp;serve=C6AILKT&amp;placement=materializecss" id="_carbonads_js"></script>
          </div>
          <br>

        </div>
        <div class="github-commit">
          <div class="container">
            <div class="commit">
              Latest Commit on Github:
              &nbsp;&nbsp;
              <a href="#" class="sha"></a>
              &nbsp;&nbsp;
              <span class="date"></span>
              <a id="github-button" href="https://github.com/Dogfalo/materialize" class="btn-flat right grey-text text-lighten-5 waves-effect waves-light hide-on-small-only">Github</a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="section">

          <div class="row">
            <div class="col s12 m8 offset-m2">
              <br>
              <img id="responsive-img" src="images/responsive.png">
            </div>
          </div>

          <div class="row">
            <h3 class="col s12 light center header">Materialize simplifies life for developers and the users they serve.</h3>
          </div>

          <!--   Promo Section   -->
          <div class="row">
            <div class="col s12 m4">
              <div class="center promo">
                <i class="material-icons">flash_on</i>
                <p class="promo-caption">Speeds up development</p>
                <p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="center promo">
                <i class="material-icons">group</i>
                <p class="promo-caption">User Experience Focused</p>
                <p class="light center">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="center promo">
                <i class="material-icons">settings</i>
                <p class="promo-caption">Easy to work with</p>
                <p class="light center">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
              </div>
            </div>
          </div>

        </div>
        <div class="divider"></div>
        <div class="section">
          <div class="row center">
            <h3 class="light header">Showcase</h3>
            <p class="col s12 m8 offset-m2 caption">Checkout what people are creating with Materialize. Get inspired by these beautiful sites and you can even submit your own website to be showcased here.</p>
            <a href="showcase.html" class="btn-large waves-effect waves-light">Explore our Showcase</a>
          </div>
        </div>
        <div class="divider"></div>
        <div class="section">
          <div class="row center">
            <h3 class="light header">Themes</h3>
            <div class="col s12 m6 offset-m3">
              <p class="caption">
              Take a look at our official themes for Materialize.</p>
              <img width="100%" src="https://postimg.org/image/e23erp6af/" alt="">
              <br><br>
              <a href="themes.html" class="btn-large waves-effect waves-light">Explore our Themes</a>
            </div>
          </div>
        </div>
      </div>

    </main>    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l4 s12">
            <h5 class="white-text">Help Materialize Grow</h5>
            <p class="grey-text text-lighten-4">We hope you have enjoyed using Materialize and if you feel like it has helped you out and want to support the team you can help us by donating or backing us on Patreon. Any amount would help support and continue development on this project and is greatly appreciated.</p>
            <a class="btn waves-effect waves-light red lighten-3" href="support-us.html">Support Us</a>
          </div>
          <div class="col l4 s12">
            <h5 class="white-text">Join the Discussion</h5>
            <p class="grey-text text-lighten-4">We have a Gitter chat room set up where you can talk directly with us. Come in and discuss new features, future goals, general problems or questions, or anything else you can think of.</p>
            <a class="btn waves-effect waves-light red lighten-3" target="_blank" href="https://gitter.im/Dogfalo/materialize">Chat</a>
          </div>
          <div class="col l4 s12" style="overflow: hidden;">
            <h5 class="white-text">Connect</h5>
            <iframe src="https://ghbtns.com/github-btn.html?user=dogfalo&amp;repo=materialize&amp;type=watch&amp;count=true&amp;size=large" allowtransparency="true" frameborder="0" scrolling="0" width="170" height="30"></iframe>
            <br>
            <a href="https://twitter.com/MaterializeCSS" class="twitter-follow-button" data-show-count="true" data-size="large" data-dnt="true">Follow @MaterializeCSS</a>
            <br>
            <div class="g-follow" data-annotation="bubble" data-height="24" data-href="https://plus.google.com/108619793845925798422" data-rel="publisher"></div>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <h5 class="white-text">Patreon Sponsors</h5>
          </div>
          <div class="col l3 s12">
            <div class="patreon-footer-ad">
              <a href="http://lucidocean.com/" target="_blank">
                <img src="../s8.postimg.org/762csselh/logo_full_size.png" alt="Lucid Ocean">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2014-2017 Materialize, All rights reserved.
        <a class="grey-text text-lighten-4 right" href="https://github.com/Dogfalo/materialize/blob/master/LICENSE">MIT License</a>
        </div>
      </div>
    </footer>

    <!--  Scripts-->
    <script src="../code.jquery.com/jquery-3.2.1.min.js"></script>
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