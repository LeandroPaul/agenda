<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatosController;


Route::get('/', function () {
    return redirect('/contatos');
});


#Route::get('/series','App\Http\Controllers\SeriesController@listarSeries');

#Route::get('/series/criar','App\Http\Controllers\SeriesController@create');

#Route::post('/series/criar','App\Http\Controllers\SeriesController@store');


Route::controller(ContatosController::class)->group(function(){
    Route::get('/contatos', 'index')->name('contatos.index');
    Route::get('/contatos/create','create')->name('contatos.create');
    Route::post('/contatos/create','store')->name('contatos.store');
    Route::post('/contatos/destroy/{contato}','destroy')->name('contatos.destroy');
    Route::get('/contatos/edit/{contato}','edit')->name('contatos.edit');
    Route::post('/contatos/update','update')->name('contatos.update');
});






