<?php

use Illuminate\Support\Facades\Route;

//ROTA PARA HOME
Route::get('/', function () {
    return view('home');
});

//ROTA PARA O FORM DE CONTATO
Route::get('/novocontato', function () {
    return view('novocontact');
});

//ROTA PARA A LISTA DE CONTATOS
//ACESSANDO O MÉTODO DE UM CONTROLLER (@nomeMÉTODO) 
Route::get('/contact-return', 'App\Http\Controllers\ContactController@listar');

//ROTA PARA ACESSAR O MÉTODO DE EXCLUSÃO
Route::get('/delete-return/{id}', 'App\Http\Controllers\ContactController@destroy');

//ROTA PARA ACESSAR O MÉTODO DE INSERÇÃO
Route::post('/insert-return', 'App\Http\Controllers\ContactController@insert');

//ROTA PARA ACESSAR A VIEW DE EDIÇÃO + DADOS PARA EDITAR
Route::get('/edit-return/{id}', 'App\Http\Controllers\ContactController@edit');

//ROTA PARA UPDATE
Route::post('/update-return/{id}', 'App\Http\Controllers\ContactController@update');


