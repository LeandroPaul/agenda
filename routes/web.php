<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatos', 'App\Http\Controllers\ContatosController@index');

Route::get('/contatos/criar', 'App\Http\Controllers\ContatosController@create');

Route::post('/contatos/criar', 
    'App\Http\Controllers\ContatosController@store');