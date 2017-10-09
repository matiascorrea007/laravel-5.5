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



Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('auto-complete-city', 'GoogleController@index')->name('auto-complete-city');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/redirect', 'LoginController@redirectToProvider');
Route::get('/callback', 'LoginController@handleProviderCallback');



Route::group(['middleware' => 'web'], function () {
	
	Route::get('/home', 'HomeController@index');


    //usuario 
    Route::get('usuario','UsuariosController@index');
    Route::get('usuario-create','UsuariosController@create');
    Route::post('usuario-store','UsuariosController@store');
    Route::put('usuario-update/{id}','UsuariosController@update');
    Route::delete('usuario-destroy/{id}','UsuariosController@destroy');

    //roles
    Route::get('usuario-roles','UsuariosController@Roles');
    Route::post('usuario-roles-store','UsuariosController@storeRoles');
    Route::put('usuario-roles-update/{id}','UsuariosController@updateRoles');
    Route::delete('usuario-roles-destroy/{id}','UsuariosController@destroyRoles');

    //permisos
    Route::get('usuario-permisos','UsuariosController@Permisos');
    Route::post('usuario-permisos-store','UsuariosController@storePermisos');
    Route::put('usuario-permisos-update/{id}','UsuariosController@updatePermisos');
    Route::delete('usuario-permisos-destroy/{id}','UsuariosController@destroyPermisos');

    //asigna un rol a un usuario
    Route::get('usuario-asignar-rol/{idusu}/{idrol}', 'UsuariosController@usuarioAsignarRol');
    Route::get('usuario-quitar-rol/{idusu}/{idrol}', 'UsuariosController@usuarioQuitarRol');

    //asigna un permiso a un rol
    Route::get('usuario-rol-permiso/{idrol}', 'UsuariosController@rolPermiso');
    Route::get('usuario-rol-asignar-permiso/', 'UsuariosController@rolAsignarPermiso');
    Route::get('usuario-rol-quitar-permiso/{idrol}/{idper}', 'UsuariosController@rolQuitarPermiso');

});