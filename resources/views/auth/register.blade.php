<!DOCTYPE html>
<html lang="es">
<head>
    <title>Acceso</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/img/icono.png" />
    <link rel="stylesheet" href="{{ asset('inicio/css/main.css')}}">
</head>
<body class="cover" style="background-image: url('assets/images/sdirbar.png');">
   <nav class="navbar" style="box-shadow: 0px 0px 30px #fff; background-color: #EE6E73">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <ul class="nav navbar-nav col-md-offset-2">
                        <li><a href="#">Miles han vivido sin amor, pero ni uno si agua. </a></li>
                    </ul>
                </div>
            </div>
        </div>
   </nav>
<form class="full-box logInForm" role="form" method="POST" action="{{ url('/login') }}">
    <p class="text-center">Registro de Usuario</p>
    {{ csrf_field() }}
        <div class="form-group label-floating{{ $errors->has('email') ? ' has-error' : '' }}">
            <div lass="form-group label-floating">
                <label class="control-label" for="UserEmail"><i class="glyphicon glyphicon-user"></i> Correo</label>
                <input id="email" type="email" class="form-control email" name="email" value="{{ old('email') }}"  style="color: #fff;">
                @if ($errors->has('email'))
                     <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
        <div class="form-group label-floating{{ $errors->has('email') ? ' has-error' : '' }}">
            <div lass="form-group label-floating">
                <label class="control-label" for="UserEmail"><i class="glyphicon glyphicon-user"></i> Correo</label>
                <input id="email" type="email" class="form-control email" name="email" value="{{ old('email') }}"  style="color: #fff;">
                @if ($errors->has('email'))
                     <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
        <div class="form-group label-floating{{ $errors->has('email') ? ' has-error' : '' }}">
            <div lass="form-group label-floating">
                <label class="control-label" for="UserEmail"><i class="glyphicon glyphicon-user"></i> Correo</label>
                <input id="email" type="email" class="form-control email" name="email" value="{{ old('email') }}"  style="color: #fff;">
                @if ($errors->has('email'))
                     <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
        <div class="form-group label-floating{{ $errors->has('email') ? ' has-error' : '' }}">
            <div lass="form-group label-floating">
                <label class="control-label" for="UserEmail"><i class="glyphicon glyphicon-user"></i> Correo</label>
                <input id="email" type="email" class="form-control email" name="email" value="{{ old('email') }}"  style="color: #fff;">
                @if ($errors->has('email'))
                     <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
        <div class="form-group label-floating{{ $errors->has('password') ? ' has-error' : '' }}">
            <div lass="form-group label-floating">
                <label class="control-label" for="UserPass"><i class="glyphicon glyphicon-log-in"></i> Contraseña</label>
                <input id="password" type="password" class="form-control password" name="password" style="color: #fff;">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group text-center">
            <input type="submit" value="Iniciar sesión" class="btn btn-raised btn-danger">
            <div class="form-group label-floating text-center">
                <a href="{{ url('/login')}}">Login</a>
            </div>
        </div>
        
    </form> 
    
    <!--====== Scripts -->
    <script src="{{ asset('inicio/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('inicio/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('inicio/js/material.min.js')}}"></script>
    <script src="{{ asset('inicio/js/ripples.min.js')}}"></script>
    <script src="{{ asset('inicio/js/sweetalert2.min.js')}}"></script>
    <script src="{{ asset('inicio/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('inicio/js/main.js')}}"></script>
    <script>
        $.material.init();
    </script>
</body>
</html>