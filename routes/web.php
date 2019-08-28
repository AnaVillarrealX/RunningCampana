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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('contactUS', 'ContactUSController@contactUS')->name('contactUS');
Route::post('contactUS', 'ContactUSController@contactUSPost')->name('contactUS');

Route::get('/faqs','FaqsController@faqs')->name('faqs');

// Route::get('/listadoUsuarios','UserController@index')->name('listadoUsuarios');
//Route::get('/detalleUsuario/{id}','UserController@show')->name('detalleUsuario');

Route::get('/listadoCarreras','GoalController@index')->name('listadoCarreras');
//
//Route::group(['prefix' => 'admin', 'middleware' => ['auth','role']], function () {
    // Route::resource('/goals', 'AdminGoalController');
    //Route::resource('admin/users/listadoUsuarios','AdminUserController');
//});

// Route::get('/admin/users/listadoUsuarios','AdminUserController@index')->name('listadoUsuarios');

Route::get('/listadoFotosEntrenamientos','FotosController@entrenamientos')->name('listadoFotosEntrenamientos');
Route::get('/listadoFotosCarreras','FotosController@carreras')->name('listadoFotosCarreras');
Route::get('/listadoFotosHistorias','FotosController@historias')->name('listadoFotosHistorias');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','role']], function () {

Route::resource('/users','AdminControllerUser');

Route::resource('/goals','AdminControllerGoal');
});
