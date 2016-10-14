<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','ProdutoController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('social/{provider?}', 'SocialController@getSocialAuth');
Route::get('social/callback/{provider?}', 'SocialController@getSocialAuthCallback');
Route::get('/produto', ['uses'=>'ProdutoController@index','as'=>'produto.index']);
Route::get('/produto/adicionar', ['uses'=>'ProdutoController@adicionar','as'=>'produto.adicionar']);
Route::post('/produto/salvar', ['uses'=>'ProdutoController@salvar','as'=>'produto.salvar']);
Route::get('/produto/editar/{id}', ['uses'=>'ProdutoController@editar','as'=>'produto.editar']);
Route::put('/produto/atualizar/{id}', ['uses'=>'ProdutoController@atualizar','as'=>'produto.atualizar']);
Route::get('/produto/deletar/{id}', ['uses'=>'ProdutoController@deletar','as'=>'produto.deletar']);

