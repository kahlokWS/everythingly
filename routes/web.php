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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', 'firstPage\welcomeController');
Route::resource('registerNew', 'firstPage\RegisterController');
Route::post('registerStore', 'firstPage\RegisterController@store');
Route::post('loginEv', 'firstPage\MainController@checklogin');

//body Page
// Route::get("dashboard", function () {
//     return view('bodyPage\dashboard');
// })->middleware('user');
Route::resource("dashboard", "bodyPage\dashboardController");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
