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
Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/pinghost', 'HomeController@pinghost')->name('pinghost');
Route::post('/checkpinhost', 'HomeController@checkpinhost');

Route::get('/portscanner', 'HomeController@portscanner_view');
Route::post('/checkportscanner', 'HomeController@portscanner_check');

Route::get('/add-computer', 'HomeController@add_computer_view');
Route::get('/add-router', 'HomeController@add_router_view');
Route::get('/add-switch', 'HomeController@add_switch_view');
Route::post('/add-computer', 'HomeController@add_computer_add');
Route::post('/add-router', 'HomeController@add_router_add');
Route::post('/add-switch', 'HomeController@add_switch_add');

Route::get('/logout', function () {
    auth()->logout();
    return redirect("/");
});

Route::get('/device-list', 'HomeController@device_list_view');

Route::get('/view/{id}', 'HomeController@device_view');

Route::post('/cart1', 'HomeController@cart1');
Route::post('/cart2', 'HomeController@cart2');
Route::post('/cart3', 'HomeController@cart3');
Route::post('/cart4', 'HomeController@cart4');


Route::post('/load_details_dashboard', 'HomeController@load_details_dashboard');

