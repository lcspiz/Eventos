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

//Rotas de Contas

Route::get('contas/', [

		'uses' => 'ContaCorrenteController@index',
		'as' => 'conta_corrente'
]);

Route::get('contas/create', [

		'uses' => 'ContaCorrenteController@create',
		'as' => 'contacorrente.create'
]);

Route::post('contas/store', [

		'uses' => 'ContaCorrenteController@store',
		'as' => 'contacorrente.store'
]);

Route::get('contas/edit/{id}', [

		'uses' => 'ContaCorrenteController@edit',
		'as' => 'contacorrente.edit'
]);

Route::post('contas/update/{id}', [

		'uses' => 'ContaCorrenteController@update',
		'as' => 'contacorrente.update'
]);

Route::get('contas/delete/{id}', [

		'uses' => 'ContaCorrenteController@destroy',
		'as' => 'contacorrente.delete'
]);


//Rotas de Clientes

Route::get('clientes/', [

		'uses' => 'CliController@index',
		'as' => 'clientes'
]);

Route::post('cliente/store', [

		'uses' => 'CliController@store',
		'as' => 'cliente.store'
]);

Route::get('cliente/create', [

		'uses' => 'CliController@create',
		'as' => 'cliente.create'
]);

Route::get('cliente/edit/{id}', [

		'uses' => 'CliController@edit',
		'as' => 'cliente.edit'
]);

Route::post('cliente/update/{id}', [

		'uses' => 'CliController@update',
		'as' => 'cliente.update'
]);

Route::get('cliente/delete/{id}', [

		'uses' => 'CliController@destroy',
		'as' => 'cliente.delete'
]);

Route::get('clientes/search/', [

		'uses' => 'CliController@searchMatch',
		'as' => 'cliente.searchMatch'
]);

Route::get('clientes/pesquisa/', [

		'uses' => 'CliController@search',
		'as' => 'cliente.pesquisa'
]);

//Rotas de Fornecedores

Route::get('fornecedores/', [

		'uses' => 'FornecController@index',
		'as' => 'fornecedores'
]);

Route::post('fornecedor/store', [

		'uses' => 'FornecController@store',
		'as' => 'fornecedor.store'
]);

Route::get('fornecedor/create', [

		'uses' => 'FornecController@create',
		'as' => 'fornecedor.create'
]);

Route::get('fornecedor/edit/{id}', [

		'uses' => 'FornecController@edit',
		'as' => 'fornecedor.edit'
]);

Route::post('fornecedor/update/{id}', [

		'uses' => 'FornecController@update',
		'as' => 'fornecedor.update'
]);

Route::get('fornecedor/delete/{id}', [

		'uses' => 'FornecController@destroy',
		'as' => 'fornecedor.delete'
]);

Route::get('fornecedor/search/', [

		'uses' => 'FornecController@searchMatch',
		'as' => 'fornecedor.searchMatch'
]);

Route::get('fornecedor/pesquisa/', [

		'uses' => 'FornecController@search',
		'as' => 'fornecedor.pesquisa'
]);

//Rota de Vendedores
Route::get('vendedores/', [

		'uses' => 'VendedorController@index',
		'as' => 'vendedores'
]);

Route::post('vendedor/store', [

		'uses' => 'VendedorController@store',
		'as' => 'vendedor.store'
]);

Route::get('vendedor/create', [

		'uses' => 'VendedorController@create',
		'as' => 'vendedor.create'
]);

Route::get('vendedor/edit/{id}', [

		'uses' => 'VendedorController@edit',
		'as' => 'vendedor.edit'
]);

Route::post('vendedor/update/{id}', [

		'uses' => 'VendedorController@update',
		'as' => 'vendedor.update'
]);

Route::get('vendedor/delete/{id}', [

		'uses' => 'VendedorController@destroy',
		'as' => 'vendedor.delete'
]);

Route::get('vendedor/search/', [

		'uses' => 'VendedorController@searchMatch',
		'as' => 'vendedor.searchMatch'
]);

Route::get('vendedor/pesquisa/', [

		'uses' => 'VendedorController@search',
		'as' => 'vendedor.pesquisa'
]);	

//Rotas de Contatos do Cliente

Route::get('cliente/contato/create/{id}', [

		'uses' => 'ContatoClienteController@create',
		'as' => 'contato_cliente.create'
]);

Route::post('cliente/contato/store/{id}', [

		'uses' => 'ContatoClienteController@store',
		'as' => 'contato_cliente.store'
]);

Route::get('cliente/contato/edit/{id_cliente}/{id_contato}', [

		'uses' => 'ContatoClienteController@edit',
		'as' => 'contato_cliente.edit'
]);

Route::post('cliente/contato/update/{id_cliente}/{id_contato}', [

		'uses' => 'ContatoClienteController@update',
		'as' => 'contato_cliente.update'
]);

Route::get('cliente/contato/delete/{id}', [

		'uses' => 'ContatoClienteController@destroy',
		'as' => 'contato_cliente.delete'
]);

//Rotas de contatos de Fornecedores

Route::get('fornecedor/contato/create/{id}', [

		'uses' => 'ContatoFornecController@create',
		'as' => 'contato_fornecedor.create'
]);

Route::post('fornecedor/contato/store/{id}', [

		'uses' => 'ContatoFornecController@store',
		'as' => 'contato_fornecedor.store'
]);

Route::get('fornecedor/contato/edit/{id_fornec}/{id_contato}', [

		'uses' => 'ContatoFornecController@edit',
		'as' => 'contato_fornecedor.edit'
]);

Route::post('fornecedor/contato/update/{id_fornec}/{id_contato}', [

		'uses' => 'ContatoFornecController@update',
		'as' => 'contato_fornecedor.update'
]);

Route::get('fornecedor/contato/delete/{id}', [

		'uses' => 'ContatoFornecController@destroy',
		'as' => 'contato_fornecedor.delete'
]);

//Rotas de Serviço Nv1

Route::get('serv1/', [

		'uses' => 'Serv1Controller@index',
		'as' => 'serv1'
]);

Route::get('serv1/create', [

		'uses' => 'Serv1Controller@create',
		'as' => 'serv1.create'
]);

Route::post('serv1/store', [

		'uses' => 'Serv1Controller@store',
		'as' => 'serv1.store'
]);

Route::get('serv1/edit/{id}', [

		'uses' => 'Serv1Controller@edit',
		'as' => 'serv1.edit'
]);

Route::post('serv1/update/{id}', [

		'uses' => 'Serv1Controller@update',
		'as' => 'serv1.update'
]);

Route::get('serv1/delete/{id}', [

		'uses' => 'Serv1Controller@delete',
		'as' => 'serv1.delete'
]);


//Rotas de Serviço Nv2

Route::get('serv2/', [

		'uses' => 'Serv2Controller@index',
		'as' => 'serv2'
]);

Route::get('serv2/get/{id}', ['uses' => 'Serv3Controller@getNv2']);


Route::get('serv2/create', [

		'uses' => 'Serv2Controller@create',
		'as' => 'serv2.create'
]);

Route::post('serv2/store', [

		'uses' => 'Serv2Controller@store',
		'as' => 'serv2.store'
]);

Route::get('serv2/edit/{id}', [

		'uses' => 'Serv2Controller@edit',
		'as' => 'serv2.edit'
]);

Route::post('serv2/update/{id}', [

		'uses' => 'Serv2Controller@update',
		'as' => 'serv2.update'
]);

Route::get('serv2/delete/{id}', [

		'uses' => 'Serv2Controller@delete',
		'as' => 'serv2.delete'
]);


//Rotas de Serviço Nv3
Route::get('serv3/', [

		'uses' => 'Serv3Controller@index',
		'as' => 'serv3'
]);

Route::get('serv3/create', [

		'uses' => 'Serv3Controller@create',
		'as' => 'serv3.create'
]);

Route::post('serv3/store', [

		'uses' => 'Serv3Controller@store',
		'as' => 'serv3.store'
]);

Route::get('serv3/edit/{id}', [

		'uses' => 'Serv3Controller@edit',
		'as' => 'serv3.edit'
]);

Route::get('serv3/delete/{id}', [

		'uses' => 'Serv3Controller@delete',
		'as' => 'serv3.delete'
]);
