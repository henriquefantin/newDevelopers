<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

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
            return redirect('/login')->with('mensagemAlertSuccess', $msg);
        } else {
            $msg = "Usuário não foi cadastrado.";
            return redirect('/register')->with('mensagemAlertDanger', $msg);
        }
    }

    function login(Request $req){
    	//Comparar usuário e senha
    	$email = $req->input('email');
    	$senha = $req->input('password');

    	$usuario_login = User::where('email', '=', $email)->first();
    	// $usuario terá null ou os dados do usuario encontrado

    	if ($usuario_login && $usuario_login->password == $senha){
    		$msg = "Olá " . $email;
            return redirect('/home')->with('mensagemAlertSuccess', $msg);
    	} else {
    		$msg = "Usuário ou senha inválidos.";
            return redirect('/login')->with('mensagemAlertDanger', $msg);
    	}
    }

    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
