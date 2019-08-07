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

Route::get('asd', function () {
    return view('welcome', 
        [
            'title' => "An even cooler way to do the title"
        ]
    );
});

Route::resource('/', 'firstPage\welcomeController');
Route::resource('registerNew', 'firstPage\RegisterController');
Route::post('registerStore', 'firstPage\RegisterController@store');
Route::post('loginEv', 'firstPage\MainController@checklogin');

//body Page
// Route::get("dashboard", function () {
//     return view('bodyPage\dashboard');
// })->middleware('user');
Route::resource("dashboard", "bodyPage\dashboardController");
Route::resource("user/financial", "bodyPage\selfFinancialController");
Route::resource("user/profile", "bodyPage\profileController");
Route::get("user/profileEdit", function () {
    return view("bodyPage/editProfile");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/page', function () {
    return view('page',
        [
            'title' => "Page 2 - A little about the Author",
            'author' => json_encode([
                    "name" => "Fisayo Afolayan",
                    "role" => "Software Enginner",
                    "code" => "Always keeping it clean"
            ])
        ]
    );
});