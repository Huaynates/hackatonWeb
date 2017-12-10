<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


	public function inicio()
	{
		return View("navegacion.inicio");
	}

	public function publicaciones()
	{
		return View("navegacion.publicaciones");
	}

	public function contacto()
	{
		return View("navegacion.contactos");
	}

	public function usuario()
	{
		//return View("navegacion.usuario");
		return "hola mundo";
	}

	public function index()
	{
		return View("index");
	}


}




