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
    <nav style="background-color: white;opacity: 0.9">
        <div class="nav-wrapper">
           
            <a href="#!" class="brand-logo">
              <img src="/img/logo.png" alt="" width="60" height="100" class="responsive-img">
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
                    <li><a href="{{ url('/login') }}" style="color: #2196f3 ">
                    <b><i class="material-icons">perm_identity</i></b>                        
                       
                    </a></li>
                </ul>

                <a href="#" data-activates="mobile-demo" class="button-collapse"  >
                    <i class="material-icons" style="color: navy">menu</i>
                </a>

            </div>

            <ul class="side-nav" id="mobile-demo" id="side-N>
                 <li><a href="/">INICIO</a></li>
                <li><a href="/publicaciones">PUBLICACIONES</a></li>
                <li><a href="/contacto">CONTACTANOS</a></li>
                <li><a href="/usuario">USUARIOS</a></li>
            </ul>            
        </div>
    </nav>
  </div>

<div  class="video">    
  <video src="/img/agua.mp4" autoplay loop>  </video>
   <h3>
   <b>BIENVENIDOS</b>
   </h3>
</div>

<style>
    video{
        min-width: 100%;
        background-color: rgba(0,0,0,0.8);
        filter:brightness(0.9); 
        min-height: 10%;   
    }
    video {

     position: relative; 
     min-width: 100%; /* for IE 6 */
 
    } 
    h3 {
       background-color: #e0e0e0 ;
       position: absolute; 
       top: 90%; 
       left: 0; 
       min-width: 100%;
       color: #4fc3f7;
       }
</style>

@yield("inicio")
@yield("publicaciones")
@yield("contactanos")
@yield("login")


 <div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large blue">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>

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