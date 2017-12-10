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
    return view('index');
});

Route::get('inicio', 'Controller@inicio')->name('inicio');
Route::get('publicaciones', 'Controller@publicaciones')->name('publicaciones');
Route::get('contacto', 'Controller@contacto')->name('contacto');
Route::get('usuario', 'Controller@usuario')->name('usuario');
Route::get('/', 'Controller@index')->name('index');
////////////////////////////////////////////
Route::get("register","Register@register");

//home de administrador 
Route::get('/admin/home', 'HomeController@home');
Route::get('/admin/control', 'HomeController@control');

Auth: