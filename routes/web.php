<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal/home');
});

//Perguntas
Route::get('/home', 'InterativaController@home')->name('home');
Route::get('/exercicios', 'InterativaController@exercicios')->name('exercicios');

//Desenvolvimento
Route::get('/desafio/desenvolvimento', 'InterativaController@desafioDesenvolvimento')->name('desafioDesenvolvimento');
Route::get('/desafio/desenvolvimento/exercicio/{id}', 'InterativaController@exercicioDesenvolvimento')->name('exercicioDesenvolvimento');

//Multipla Escolha
Route::get('/desafio/multiplaEscolha', 'InterativaController@multiplaEscolha')->name('multiplaEscolha');
Route::get('/desafio/multiplaEscolha/exercicio/{id}', 'InterativaController@exercicioMultiplaEscolha')->name('exercicioMultiplaEscolha');

//Descritivos
Route::get('/desafio/descritivo', 'InterativaController@desafioDescritivo')->name('desafioDescritivo');
Route::get('/desafio/descritivo/exercicio/{id}', 'InterativaController@exercicioDescritivo')->name('exercicioDescritivo');