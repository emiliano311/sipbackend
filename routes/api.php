<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

//  Route::middleware('auth:api')->get('/user', function (Request $request) {
//      return $request->user();

// Route::group(['middleware' => 'cors'], function(){

Route::get('personas', 'PersonaController@index');
// Route::post('login', 'Auth\LoginController@login');

Route::group(['prefix' => 'auth'], function () {

    Route::post('login', 'AuthController@login');

    Route::post('signup', 'AuthController@signup');
});

// Las siguientes rutas además del prefijo requieren que el usuario tenga un token válido
Route::group(['middleware' => 'auth:api'], function () {
    Route::get('logout', 'AuthController@logout');
    Route::get('user', 'AuthController@user');

    Route::get('personas/{id}', 'PersonaController@show');

    Route::group(['prefix' => 'm'], function () {
        Route::get('menu/{id}', 'MenuController@listar');
        Route::get('mostrarmenu/{id}', 'MenuController@mostrarMenu');

    });
    Route::group(['prefix' => 'u'], function () {
        Route::get('usuarios', 'UsuarioController@index');
        Route::get('usuarios/{id}', 'UsuarioController@findById');

        Route::post('newUsuario', 'UsuarioController@newUsuario');

        Route::put('updateUsuario', 'UsuarioController@update');

        Route::delete('deleteUsuario/{id}','UsuarioController@destroy');

    });
    // Route::post('login', 'PassportController@login');

    // Aquí agrega tus rutas de la API. En mi caso (EN MI CASO, EL TUYO PUEDE VARIAR) he agregado una de productos

});
// });
