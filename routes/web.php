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
});

Route::get('/', function () {
    return view('index');
});

Route::get('/docentes','DocenteController@prueba')->name('verDocentes');
Route::get('/docentes/agregar','DocenteController@agregar')->name('addDocente');
Route::get('/docentes/{codigo}','DocenteController@delete')->name('delDocente');




Route::get('/academias','AcademiaController@index')->name('verAcademias');
Route::get('/academias/agregar','AcademiaController@agregar')->name('addAcademia');
Route::get('/academias/{codigo}','AcademiaController@delete')->name('delAcademia');
