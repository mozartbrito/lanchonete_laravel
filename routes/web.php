<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produtos', 'ProdutoController@index')->name('produtos');
Route::get('produtos/add', 'ProdutoController@add')->name('produtos.add');
Route::get('produtos/editar/{id}', 'ProdutoController@edit')->name('produtos.edit');
Route::post('produtos/salvar', 'ProdutoController@store')->name('produtos.store');
Route::post('produtos/atualizar/{id}', 'ProdutoController@update')->name('produtos.update');
Route::get('produto/deletar/{id}', 'ProdutoController@delete')->name('produtos.delete');
