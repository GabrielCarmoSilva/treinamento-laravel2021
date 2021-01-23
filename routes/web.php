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

Auth::routes();
Route::get('/', function () {
    return view('admin.layouts.app');
    
})->name('dashboard');
Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/pessoas', 'PersonController@index')->name('people.index');
//Route::post('/pessoas/criar', 'PersonController@store')->name('people.create');

Route::resource('/people', 'PersonController')
    ->names('people');

Route::resource('/categories', 'CategoryController')
    ->names('categories');

Route::resource('/courses', 'CourseController')
    ->names('courses');