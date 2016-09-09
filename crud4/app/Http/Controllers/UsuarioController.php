<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Usuario;

class UsuarioController extends Controller
{
    
    public function store(Request $request)
    {
    	$nombre = $request['firstname'];
    	$contrasena = bcrypt($request['password']);

    	$usuario = new Usuario();
    	$usuario->nombre = $nombre;
    	$usuario->contrasena = $contrasena;

    	$usuario->save();

    	return redirect()->back();
    }
}
