<?php



Route::get('/', 'LoginController@login')->name('login');
Route::post('/', 'LoginController@logar')->name('logar');
Route::get('/deslogar', 'LoginController@login')->name('login');

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

Route::prefix('usuario')->group(function () {
    Route::get('/','UsuarioController@detalhe')->name('usuario');
});

Route::prefix('insumos')->group(function () {
    Route::get('/','InsumoController@listar')->name('listar_insumo');
});

Route::prefix('composicao')->group(function () {
    Route::get('/','ComposicaoController@listar')->name('listar_composicao');
});

Route::prefix('orcamento')->group(function () {
    Route::get('/','OrcamentoController@listar')->name('listar_orcamento');
});