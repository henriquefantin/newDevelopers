<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class InterativaController extends Controller
{
    function home() {
        return view('principal/home');
    }

    function exercicios() {
        return view('interativa/exercicios');
    }

    function desafioDesenvolvimento() {
        return view('interativa/desafioDesenvolvimento');
    }

    function exercicioDesenvolvimento($id) {
        return view('interativa/desenvolvimento/desafioDesenvolvimento'.$id);
    }

    function multiplaEscolha() {
        return view('interativa/multiplaEscolha');
    }

    function exercicioMultiplaEscolha($id) {
        return view('interativa/multiplaEscolha/exeMPE'.$id);
    }

    function desafioDescritivo() {
        return view('interativa/descritivos');
    }

    function exercicioDescritivo($id) {
        return view('interativa/descritivo/desafioDescritivo'.$id);
    }
}
