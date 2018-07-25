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
//Auth
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('', 'Web\PageController@inicio')->name('inicio');
Route::get('/cursos', 'Web\PageController@cursos')->name('cursos');
Route::get('/nosotros', 'Web\PageController@nosotros')->name('nosotros');
Route::get('/proyectos', 'Web\PageController@proyectos')->name('proyectos');

//curso individual
Route::get('/curso/{slug}', 'Web\PageController@curso')->name('curso');
Route::get('/perfil/{slug}', 'Web\PageController@perfil')->name('perfil');

//panel admin
Route::resource('/courses', 'Admin\CourseController');
Route::resource('/profiles', 'Admin\ProfileController');
Route::get('/admin', 'Web\PageController@admin')->name('BackOffice');