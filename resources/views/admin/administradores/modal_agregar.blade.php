<!-- Modal -->
		<div class="modal fade" id="dataRegister" role="dialog" tabindex="-1">
		    <div class="modal-dialog"> 
		      <!-- Modal content-->
		        <div class="modal-content">
		            <div class="modal-header alert text-center" style="background-color: #EE6E73">
	          			<h4 class="text-center"><span class="zmdi zmdi-account zmdi-hc-fw"></span> Registro de Usuario</h4>
	        		</div>
		            <div class="modal-body">
		                {!!Form::open(array('url' => 'admin/clients','method'=>'POST','autocomplete'=>'off','id'=>'user_form')) !!}
							{{ csrf_field() }}
			                <div class="tab-content">
								   
			                    	<div class="form-group label-floating{{ $errors->has('nombres') ? ' has-error' : '' }}">
							            <div lass="form-group label-floating">
							                <label class="control-label" for="Usernombres"> Apellidps</label>
							                <input id="nombres" type="text" class="form-control nombres" name="nombres" value="{{ old('nombres') }}"  style="color: #fff;">
							                @if ($errors->has('nombres'))
							                     <span class="help-block">
							                        <strong>{{ $errors->first('nombres') }}</strong>
							                    </span>
							                 @endif
							            </div>
							        </div>
			                        <div class="form-group label-floating{{ $errors->has('apellidos') ? ' has-error' : '' }}">
							            <div lass="form-group label-floating">
							                <label class="control-label" for="Userapellidos"> Apellidps</label>
							                <input id="apellidos" type="text" class="form-control apellidos" name="apellidos" value="{{ old('apellidos') }}"  style="color: #fff;">
							                @if ($errors->has('apellidos'))
							                     <span class="help-block">
							                        <strong>{{ $errors->first('apellidos') }}</strong>
							                    </span>
							                 @endif
							            </div>
							        </div>
			                       	<div class="form-group label-floating{{ $errors->has('dni') ? ' has-error' : '' }}">
							            <div lass="form-group label-floating">
							                <label class="control-label" for="Userdni"> D.N.I.</label>
							                <input id="dni" type="number" class="form-control dni" name="dni" value="{{ old('dni') }}"  style="color: #fff;">
							                @if ($errors->has('dni'))
							                     <span class="help-block">
							                        <strong>{{ $errors->first('dni') }}</strong>
							                    </span>
							                 @endif
							            </div>
							        </div>
			                         <div class="form-group label-floating{{ $errors->has('celular') ? ' has-error' : '' }}">
							            <div lass="form-group label-floating">
							                <label class="control-label" for="Usercelular"> Celular</label>
							                <input id="celular" type="email" class="form-control celular" name="celular" value="{{ old('celular') }}"  style="color: #fff;">
							                @if ($errors->has('celular'))
							                     <span class="help-block">
							                        <strong>{{ $errors->first('celular') }}</strong>
							                    </span>
							                 @endif
							            </div>
							        </div>
								    <div class="form-group label-floating{{ $errors->has('email') ? ' has-error' : '' }}">
							            <div lass="form-group label-floating">
							                <label class="control-label" for="UserEmail"> Correo</label>
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
							                <label class="control-label" for="UserPass">Contraseña</label>
							                <input id="password" type="password" class="form-control password" name="password" style="color: #fff;">
							                @if ($errors->has('password'))
							                    <span class="help-block">
							                        <strong>{{ $errors->first('password') }}</strong>
							                    </span>
							                @endif
							            </div>
							        </div>
			                        <div class="text text-center">
			                        	<button type="submit" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
	                                    <button type="reset" class="btn btn-danger btn-sm">Limpiar</button>
				                     	<button type="submit" class="btn btn-danger btn-sm">Registrar</button>
				                     	<div class="form-group label-floating text-center">
							                <a href="#" data-toggle="modal" data-target="#dataRegister">Si es miembro de una familia haz click AQUÍ</a>
							            </div>
			                        </div>
                                    
				</div>
	                    {!!Form::close()!!}	
		            </div>
		            @if (count($errors)>0)
		            <div class="alert alert-danger">
		            	<ul>
		            		@foreach($errors->all() as $error)
		            			<li>{{ $error }}</li>
		            		@endforeach
		            	</ul>
		             </div>
		             @endif
		        </div>
		    </div>
		</div>
		<!--fin modales -->