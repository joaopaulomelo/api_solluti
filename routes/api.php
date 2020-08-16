<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::prefix('v1')->namespace('Api')->group(function () {

    Route::get('lojas', 'LojaController@list');
    Route::post('lojas', 'LojaController@create');
    Route::put('lojas/{id}', 'LojaController@update');
    Route::get('lojas/{id}', 'LojaController@show');
    Route::delete('lojas/{id}', 'LojaController@destroy');

    Route::get('produtos', 'ProdutoController@list');
    Route::post('produtos', 'ProdutoController@create');
    Route::put('produtos/{id}', 'ProdutoController@update');
    Route::get('produtos/{id}', 'ProdutoController@show');
    Route::delete('produtos/{id}', 'ProdutoController@destroy');



});
