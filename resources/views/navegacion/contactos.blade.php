@extends("templates.masterTemplate")
@section("contactanos")
			
	<section class="container">
		<div class="row">
		<h3 class="center-align">CONTACTO</h3>
			<article class="col s6 offset-s3">
				<form method="POST" action="formulario-contacto.php">
					<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="apellido">Apellido</label>
						<input type="text" name="apellido" required>
					</div>
					
					<div class="input-field">
						<i class="material-icons prefix">email</i>
						<label for="email">Email</label>
						<input type="email" name="email" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">mode_edit</i>
						<label for="mensaje">Mensaje</label>
						<textarea name="mensaje" id="" rows="10" class="materialize-textarea"  length="140" required></textarea>
					</div>
					
					<p class="center-align">
						<button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>enviar</button>
					</p>

				</form>

			</article>
			</div>
		</section>

@stop	