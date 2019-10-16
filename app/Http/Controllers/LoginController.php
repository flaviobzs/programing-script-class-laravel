<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Usuario;

class LoginController extends Controller
{
    public function login(){

        return view('login');

    }

    public function logar(Request $request){

        $this->validate(
            $request, [
            'email'     => 'required',
            'password'  => 'required',
            ]
        );

        $usuario = Usuario::where('email', $request->email)->first();

        if($usuario){
            if(hash('SHA256',$request->senha) == $usuario->senha){
                // cria uma sessão do usuario
                // $_SESSION['usuario'] = $usuario;
                return redirect()->route('dashboard');
            }else{
                return redirect()->route('login')->with('status', 'Usuário ou senha incorreto');
            }
        }else{
            return redirect()->route('login')->with('status', 'Usuário ou senha incorreto');
        }

    }

    public function deslogar(){
        
        //destruir a sessão criada
        // unset($_SESSION['usuario']);
        
        return redirect()->route('login');
    }
}
