<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!-- <link rel="stylesheet" href="/css/materialize.min.css"> -->
<link rel="stylesheet" href="/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<body>

 <div class="navbar-fixed">
    <nav style="background-color: white">
        <div class="nav-wrapper">
           
            <a href="#!" class="brand-logo">
              <img src="/img/logo.png" alt="" width="70" height="10" class="responsive-img">
            </a>            

          <div class="container">

              <ul class="hide-on-med-and-down">
                <li><a href="/" style="color: #8c9eff"><b>INICIO</b></a></li>
                <li><a href="/publicaciones" style="color: #8c9eff"><b>PUBLICACIONES</b></a></li>
                <li><a href="/contacto"  style="color: #8c9eff"><b>CONTACTANOS</b></a></li>
                <li><a href="/usuario" style="color: #8c9eff"><b>USUARIOS</b></a></li>
            </ul>

            <ul class="right hide-on-med-and-down">
            
                <li><a href="/" style="color: #2196f3 "><b>BUSCAR</b></a></li>
                <li><a href="/publicaciones" style="color: #2196f3 "><b>LOGIN</b></a></li>

            </ul>

            <a href="#" data-activates="mobile-demo" class="button-collapse">
              <i class="material-icons" style="color: navy">menu</i>
            </a>

            </div>

            <ul class="side-nav" id="mobile-demo">
                 <li><a href="/">INICIO</a></li>
                <li><a href="/publicaciones">PUBLICACIONES</a></li>
                <li><a href="/contacto">CONTACTANOS</a></li>
                <li><a href="/usuario">USUARIOS</a></li>
            </ul>            
            
        </div>
    </nav>
  </div>


<div class="">
    <img src="/img/slider.jpg" alt="" class="responsive-img">
</div>


@yield("inicio")
@yield("publicaciones")
@yield("contactanos")
@yield("login")


<footer class="page-footer" style="background-color: #eceff1">

         
            <div class="container" style="color: #00b0ff">
            2017 PRONABEC
            <a class="grey-text text-lighten-4 right" href="#!"><b style="color: #00b0ff">UNA REALIDAD DE VIVIR</b></a>
            </div><br>
         
        </footer>

<script src="/js/jquery-3.2.1.min.js"></script>
<!--<script src="/js/materialize.js"></script>-->
<script src="/js/materialize.js"></script>



<script>
  $(".button-collapse").sideNav();
</script>

<style>
    #side-Nav
    {
        z-index:-1;
    }
</style>

</body>
</html>