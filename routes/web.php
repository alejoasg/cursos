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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cursos','HomeController@cursos');
Route::get('/listcursos','HomeController@listcursos');
Route::post('/cursos','HomeController@postcursos');
Route::get('/equipos','HomeController@equipos');
Route::get('/alumnos','HomeController@alumnos');
Route::get('/aulas','HomeController@aulas');




Route::group(['middleware'=>'auth', 'namespace'=>'Admin'],function(){
    Route::get('/usuarios','UserController@index');
    Route::get('/profesores','ProfessorController@index');
    Route::get('/config','ConfigController@index');
});