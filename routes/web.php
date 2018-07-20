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

Route::get('nosotros', function () {
	return view('layouts.pages.nosotros');
})->name('nosotros');
Route::get('proyectos', function () {
	return view('layouts.pages.proyectos');
})->name('proyectos');
Route::get('cursos', function () {
	return view('layouts.pages.cursos');
})->name('cursos');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
