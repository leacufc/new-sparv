<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('instrucao_inicials', 'InstrucaoInicialAPIController');
Route::resource('mensagems', 'MensagemAPIController');
Route::resource('perguntas', 'PerguntaAPIController');
Route::resource('cartas', 'CartaAPIController');
Route::resource('tempos', 'TempoAPIController');
Route::resource('visor_pontuacaos', 'VisorPontuacaoAPIController');
Route::resource('fases', 'FaseAPIController');
Route::resource('fases_mensagems', 'FaseMensagemAPIController');
Route::resource('fases_perguntas', 'FasePerguntaAPIController');
Route::resource('regra_extras', 'RegraExtraAPIController');
Route::resource('regra_extras_mensagems', 'RegraExtraMensagemAPIController');
Route::resource('regra_extras_perguntas', 'RegraExtraPerguntaAPIController');
Route::resource('modelos', 'ModeloAPIController');
Route::resource('modelos_instrucao_inicials', 'ModeloInstrucaoInicialAPIController');
Route::resource('modelos_regra_extras', 'ModeloRegraExtraAPIController');
