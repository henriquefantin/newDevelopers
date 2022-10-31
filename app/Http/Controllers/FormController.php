<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Descritiva;
use App\Desenvolvimento;
use App\MultiplaEscolha;
use Auth;

class FormController extends Controller
{
    function salvarExercicio(Request $req) {
        // Tipo Exercicio 
        // 1 - Multipla Escolha
        // 2 - Descritiva
        // 3 - Desenvolvimento
        $msg = "";
        
        $coduser = Auth::user()->id;
        $tipoExercicio = $req->input('tipoExercicio');
        $exercicio = $req->input('exercicio');
        
        if ($tipoExercicio == 1) {
            $valorRadio = $req->input('valorRadio');
            
            $multipla = new MultiplaEscolha();
            $multipla->idUser = $coduser;
            $multipla->exercicio = $exercicio;
            $multipla->resposta = $valorRadio;
            
            if($multipla->save()){
                $msg = $msg . "Exercício enviado com sucesso.";
            }else{ 
                $msg = $msg . "Exercício não foi cadastrada.";
            }
        } else if ($tipoExercicio == 2) {
            $respostaDesc = $req->input('respostaDesc');
            
            $descritiva = new Descritiva();
            $descritiva->idUser = $coduser;
            $descritiva->exercicio = $exercicio;
            $descritiva->resposta = $respostaDesc;
            
            if($descritiva->save()){
                $msg = $msg . "Exercício enviado com sucesso.";
            }else{ 
                $msg = $msg . "Exercício não foi cadastrada.";
            }
        } else if ($tipoExercicio == 3) {
            $resposta = $req->input('resposta');
            $codigoExe = $req->input('codigoExe');
            
            $desenvolvimento = new Desenvolvimento();
            $desenvolvimento->idUser = $coduser;
            $desenvolvimento->exercicio = $exercicio;
            $desenvolvimento->resposta = $resposta;
            $desenvolvimento->codigoDesenvolvido = $codigoExe;
            
            if($desenvolvimento->save()){
                $msg = $msg . "Exercício enviado com sucesso.";
            }else{ 
                $msg = $msg . "Exercício não foi cadastrada.";
            }
        }

        return redirect('/exercicios')->with('mensagemAlertSuccess', $msg);
    }
}