<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
</head>
<body>

<form  action="/register/registrarusuario" method="post" enctype="multipart/form-data">
	<h2 class="form-login-heading">REGISTRATE AHORA</h2>

		<br>
		<input type="text" class="form-control" placeholder="Nombres" name="nombres" id="nombres" 
		 required>
		<br>
		<input type="text" class="form-control" placeholder="Apellidos" name="apellidos" id="apellidos" required >
		<br>
		<input type="email" class="form-control" placeholder="correoelectronico" name="correoelectronico" 
		id="email" required>
		<br>
		<input type="text" class="form-control" placeholder="dni" name="dni" 
		id="login" required>
		<br>
		<input type="text" class="form-control" placeholder="celular" name="celular" 
		id="login" required>
		<br>
		<input type="password" class="form-control" placeholder="Password" 
		name="password" id="password" required="" >
		<br>
		<input type="file" class="form-control" name="foto" id="foto" required >
		<br>
		<button class="btn btn-success" type="submit"><i class="fa fa-lock"></i> REGISTRAR</button>
		<hr>
		 <? 
			if($errors->first("error")!=null)
				{
				  ?>
				    <div class="alert alert-danger" style="text-align: center;">
				    	<strong><?echo $errors->first("error");?></strong> 
				    </div>
				  <?
				}
		?>  	
	</form>	  	
</body>
</html>