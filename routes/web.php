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

Route::get('/login', function () {
    return view('login');
})->name('log');

Route::get('/', function () {
    return view('index');
});

//RUTAS PARA LOS DOCENTES
Route::get('/docentes','DocenteController@prueba')->name('verDocentes');
Route::get('/docentes/agregar','DocenteController@agregar')->name('addDocente');
Route::get('/docentes/{codigo}','DocenteController@delete')->name('delDocente');

//RUTAS PARA LAS ACADEMIAS
Route::get('/academias','AcademiaController@index')->name('verAcademias');
Route::get('/academias/agregar','AcademiaController@agregar')->name('addAcademia');
Route::get('/academias/{codigo}','AcademiaController@delete')->name('delAcademia');

//RUTAS PARA EL INICIO DE SESION
Route::get('/login/inicio','DocenteController@validacion')->name('entrar');

Route::get('login/inicioo/{codigo}','JuntaController@agregar')->name('entrarjefe');
Route::get('/juntas/{codigo}','JuntaController@eliminar')->name('delJunta');