<?php

use Illuminate\Support\Facades\Route;

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
//root untuk halaman
/* Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
}); */

Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');

Route::get('/mahasiswa','MahasiswaController@index');

//student
/* Route::get('/students','StudentsController@index');
Route::get('/students/create','StudentsController@create');
Route::get('/students/{student}','StudentsController@show');
Route::post('/students','StudentsController@store');
Route::delete('/students/{student}', 'StudentsController@destroy');
Route::get('/students/{student}/edit', 'StudentsController@edit');
Route::patch('/students/{student}' ,'StudentsController@update'); */

//query di atas bisa digantikan
Route::resource('students', 'StudentsController');

Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
Route::group(['middleware' => 'auth'], function () 
{
Route::get('home', 'HomeController@index')->name('home');
Route::get('logout', 'AuthController@logout')->name('logout');
});