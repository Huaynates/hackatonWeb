<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RegisterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


	 public function postregistrarusuario()
	 {
		 $dbcorreo=Usuario::where("correoelectronico","=",Input::get("correoelectronico"))->get();
		 $documento=Usuario::where("dni","=",Input::get("dni"))
		 ->get();
		 if(count($documento)>0)
		 {
		 	return Redirect::back()->withErrors(["error"=>"El Numero de dni ya existe"])->withInput();
		 }
		 if(count($dbcorreo)>0)
		 {
		 	return Redirect::back()->withErrors(["error"=>"El Correo Electronico  ya existe"])->withInput();
		 }

	 	$admin = new Usuario();
	 	$admin->nombres=Input::get("nombres");
	 	$admin->apellidos=Input::get("apellidos");
	 	$admin->email=Input::get("correoelectronico");
	 	$admin->dni=Input::get("dni");
	 	$admin->celular=Input::get("celular");
	 	$admin->password=Hash::make(Input::get("password"));
	 	$admin->save();

	 	if(Input::hasFile('foto')) {
	 		$foto =Input::file('foto');
	 		$extension = Input::file('foto')->getClientOriginalExtension();
	 		$nombre=strtolower("user_image_".$admin->id_usuario.".".$extension);

	         $destino='/img/';
	 		$subir=$foto->move(public_path().$destino,$nombre);
	 		$path_foto=$destino.$nombre;

	 		$admin->foto=$path_foto;
	 		$admin->save();
	 	}
	 	return back();

	}

	public function register()
	{
		return View("demo");
	}


}




