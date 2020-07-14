<?php

use Illuminate\Support\Facades\Route;


use \App\Admin;
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

Route::group(['middleware'=> 'web'],function(){
    
            

            Route::get('/sobre', function () {
                return view('sobre');
            });
            Route::get('/','VeiculoController@indexWelcome');

            Route::get('/veiculo/{id}/carro','VeiculoController@exibir');

            Route::get('/veiculo/{id}/form','VeiculoController@exibirForm');

            Route::get('/veiculo/{id}/carro','VeiculoController@exibir');
           
            Route::get('/contato','ContatoController@index');

            Route::get('/contato/create','ContatoController@create');

            Route::post('/contato','ContatoController@store');
            Auth::routes();

            Route::get('/home', 'HomeController@index')->name('home');    



            Route::post('/cliente/{id}','ClienteController@show');

            
});

Route::get('/contato/create','ContatoController@create');

Route::get('/financiamento','FinanciamentoController@index')->middleware('auth');

Route::post('/financiamento/calculo','FinanciamentoController@calculo')->middleware('auth');
Route::post('/preco','FinanciamentoController@buscar');

Route::get('/financiamento/pdf','FinanciamentoController@geraPdf')->middleware('auth');

Route::get('/financiamento/{id}','FinanciamentoController@show');






Route::group(['middleware'=> 'auth'],function(){
    Route::group(['middleware'=> 'is_admin'],function(){
        //(/admin) precisa tá logado
        //(/admin/login) logar no sistema como admin get enviar // formulario
        //(admin/login) logar no sistema como admin post submeter // formulari
            Route::get('/admin','VeiculoController@index');
    
            Route::get('/veiculo','VeiculoController@create');
    
            Route::post('/veiculo','VeiculoController@store');
        
            
            
            
            Route::get('/veiculo/{id}/edit','VeiculoController@edit');
            Route::put('/veiculo/{id}','VeiculoController@update');
        
            Route::get('/veiculo/atualizar', function () {
                return view('admin/atualiza');
            });
        
            Route::get('/veiculo/deletar/{id}', 'VeiculoController@destroy');
        });

});


 




