<?php

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
    return view('welcome');
});

Route::get('/marcondes', function () {
    return "<h1>Funciona?</h1>";
});


Route::get('/produtos', 'ProdutoController@lista');

Route::get('/produtos/formulario', "ProdutoController@formulario");

Route::post("/produtos/gravar", "ProdutoController@gravar");

Route::get("/produtos/deletar/{id}", "ProdutoController@deletar");

Route::get("/produtos/alterar/formulario/{id}", "ProdutoController@formularioAlterar");
Route::post("/produtos/alterar/{id}", "ProdutoController@alterar");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function() {
    Route::get("/home3")->group(function() {
        Route::get('/home2', 'HomeController@index')->name('home');
    });
    Route::get('/home2', 'HomeController@index')->name('home');
});
