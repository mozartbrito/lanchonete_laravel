<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//produtos
Route::get('/produtos', 'ProdutoController@index')->name('produtos');
Route::get('produtos/add', 'ProdutoController@add')->name('produtos.add');
Route::get('produtos/editar/{id}', 'ProdutoController@edit')->name('produtos.edit');
Route::post('produtos/salvar', 'ProdutoController@store')->name('produtos.store');
Route::post('produtos/atualizar/{id}', 'ProdutoController@update')->name('produtos.update');
Route::get('produtos/deletar/{id}', 'ProdutoController@delete')->name('produtos.delete');

//categorias
Route::get('/categorias', 'CategoriaController@index')->name('categorias');
Route::get('categorias/add', 'CategoriaController@add')->name('categorias.add');
Route::get('categorias/edit/{id}', 'CategoriaController@edit')->name('categorias.edit');
Route::post('categorias/salvar', 'CategoriaController@store')->name('categorias.store');
Route::post('categorias/atualizar/{id}', 'CategoriaController@update')->name('categorias.update');
Route::get('categorias/deletar/{id}', 'CategoriaController@delete')->name('categorias.delete');
