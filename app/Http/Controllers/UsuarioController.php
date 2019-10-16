<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Validation\Rule;


class UsuarioController extends Controller
{
    public function detalhe(){

        return view('usuario');

    }

    public function cadastrar(){

        return view('cadastro_usuario');

    }

    public function criar(Request $request){

        $this->validate(
            $request, [
            'name'      => 'required',            
            'email'     => 'required',
            'password'  => 'required',
            'estado'    => 'required'
            ]
        );

        // cria uma sessão do usuario
        // $_SESSION['usuario'] = $usuario;
        return redirect()->route('dashboard');

    }
}
