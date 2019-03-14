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

Route::get('/', 'HomeController@index');

<<<<<<< HEAD
/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__.'/frontend/');
});
Route::get('scholarship', 'ScholarshipControler@index')->name('scholarship.index');
=======
>>>>>>> 0cb17c5c26c1011aac4fb11eeb20091b79c5158a

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
