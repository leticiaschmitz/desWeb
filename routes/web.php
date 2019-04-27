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

Route::get('/leticiadaniele', function () {
    return "<h1>Funciona?</h1>";
});


Route::get('/produtos', 'ProdutosController@lista');
Route::get('/produtos/formulario', "ProdutosController@formulario");
Route::post("/produtos/gravar", "ProdutosController@gravar");
Route::get("/produtos/deletar/{IDProduto}", "ProdutosController@deletar");
Route::get("/produtos/alterar/formulario/{IDProduto}", "ProdutosController@formularioAlterar");
Route::post("/produtos/alterar/{IDProduto}", "ProdutosController@alterar");

Route::get('/categorias', 'CategoriasController@lista');
Route::get('/categorias/formulario', "CategoriasController@formulario");
Route::post("/categorias/gravar", "CategoriasController@gravar");
Route::get("/categorias/deletar/{IDCategoria}", "CategoriasController@deletar");
Route::get("/categorias/alterar/formulario/{IDCategoria}", "CategoriasController@formularioAlterar");
Route::post("/categorias/alterar/{IDCategoria}", "CategoriasController@alterar");

Route::get('/clientes', 'ClientesController@lista');
Route::get('/clientes/formulario', "ClientesController@formulario");
Route::post("/clientes/gravar", "ClientesController@gravar");
Route::get("/clientes/deletar/{id}", "ClientesController@deletar");
Route::get("/clientes/alterar/formulario/{id}", "ClientesController@formularioAlterar");
Route::post("/clientes/alterar/{id}", "ClientesController@alterar");

Route::get('/fornecedores', 'FornecedoresController@lista');
Route::get('/fornecedores/formulario', "FornecedoresController@formulario");
Route::post("/fornecedores/gravar", "FornecedoresController@gravar");
Route::get("/fornecedores/deletar/{IDCliente}", "FornecedoresController@deletar");
Route::get("/fornecedores/alterar/formulario/{IDCliente}", "FornecedoresController@formularioAlterar");
Route::post("/fornecedores/alterar/{IDCliente}", "FornecedoresController@alterar");

Route::get('/ordens', 'OrdensController@lista');
Route::get('/ordens/formulario', "OrdensController@formulario");
Route::post("/ordens/gravar", "OrdensController@gravar");
Route::get("/ordens/deletar/{IDOrdem}", "OrdensController@deletar");
Route::get("/ordens/alterar/formulario/{IDOrdem}", "OrdensController@formularioAlterar");
Route::post("/ordens/alterar/{IDOrdem}", "OrdensController@alterar");

Route::get('/regiao', 'RegiaoController@lista');
Route::get('/regiao/formulario', "RegiaoController@formulario");
Route::post("/regiao/gravar", "RegiaoController@gravar");
Route::get("/regiao/deletar/{IDRegiao}", "RegiaoController@deletar");
Route::get("/regiao/alterar/formulario/{IDRegiao}", "RegiaoController@formularioAlterar");
Route::post("/regiao/alterar/{IDRegiao}", "RegiaoController@alterar");

Route::get('/funcionarios', 'FuncionariosController@lista');
Route::get('/funcionarios/formulario', "FuncionariosController@formulario");
Route::post("/funcionarios/gravar", "FuncionariosController@gravar");
Route::get("/funcionarios/deletar/{IDFuncionario}", "FuncionariosController@deletar");
Route::get("/funcionarios/alterar/formulario/{IDFuncionario}", "FuncionariosController@formularioAlterar");
Route::post("/funcionarios/alterar/{IDFuncionario}", "FuncionariosController@alterar");

Route::get('/territorios', 'TerritoriosController@lista');
Route::get('/territorios/formulario', "TerritoriosController@formulario");
Route::post("/territorios/gravar", "TerritoriosController@gravar");
Route::get("/territorios/deletar/{IDTerritorio}", "TerritoriosController@deletar");
Route::get("/territorios/alterar/formulario/{IDTerritorio}", "TerritoriosController@formularioAlterar");
Route::post("/territorios/alterar/{IDTerritorio}", "TerritoriosController@alterar");

Route::get('/transportadoras', 'TransportadorasController@lista');
Route::get('/transportadoras/formulario', "TransportadorasController@formulario");
Route::post("/transportadoras/gravar", "TransportadorasController@gravar");
Route::get("/transportadoras/deletar/{IDTransportadora}", "TransportadorasController@deletar");
Route::get("/transportadoras/alterar/formulario/{IDTransportadora}", "TransportadorasController@formularioAlterar");
Route::post("/transportadoras/alterar/{IDTransportadora}", "TransportadorasController@alterar");





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function() {
    Route::get("/home3")->group(function() {
        Route::get('/home2', 'HomeController@index')->name('home');
    });
    Route::get('/home2', 'HomeController@index')->name('home');
});
