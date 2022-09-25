<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    function exerciciodesenvolvimento($id) {
        return view('interativa/desenvolvimento/desafioDesenvolvimento'.$id);
    }
}
