<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AppController extends Controller
{
    function tela_login(){
    	//Exibir tela de login
    	return view('auth/login');
    }

    function tela_cadastro(){
        //Exibir tela de login
        return view('auth/register');
    }

    function adicionar(Request $req){
        $email = $req->input('email');
        $senha = $req->input('password');

        $usuario_login = new User();
        $usuario_login->email = $email;
        $usuario_login->password = $senha;

        if ($usuario_login->save()){
            $msg = "Usuário '" . $email . "' adicionado com sucesso.";
        } else {
            $msg = "Usuário não foi cadastrado.";
        }

        return view("retorno", [ "mensagem" => $msg ]);
    }

    function login(Request $req){
    	//Comparar usuário e senha
    	$login = $req->input('login');
    	$senha = $req->input('senha');

    	$usuario_login = User::where('login', '=', $login)->first();
    	// $usuario terá null ou os dados do usuario encontrado

    	if ($usuario_login and $usuario_login->senha == $senha){
    		//se nao é null, entra aqui
    		//login e senha estão certos

            $variavel = [
                "login" => $login,
                "nome" => $usuario_login->nome
            ];
            session($variavel);

    		return redirect()->route('listar');
    	} else {
    		return view("retorno", ["mensagem" => "Usuário ou senha inválidos."]);
    	}
    }

    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
