<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'noticiasController@index');
Route::get('/nova_noticia', 'noticiasController@create');
Route::post('/salvar_noticia', 'noticiasController@store');
Route::get('/gerir_noticias', 'noticiasController@apresentarTabelaGestao');

//Visibilidade

Route::get('colocar_visivel/{id}', 'noticiasController@colocarVisivel');
Route::get('colocar_invisivel/{id}', 'noticiasController@colocarInvisivel');

//Apagar notícias

Route::get('eliminar_noticia/{id}', 'noticiasController@destroy');

//Editar e Atualizar

Route::get('editar_noticia/{id}', 'noticiasController@edit');
Route::post('atualizar_noticia/{id}', 'noticiasController@update');


Route::get('/viewpdf', 'PdfController@index');

Route::get('/excell', 'excellController@export');