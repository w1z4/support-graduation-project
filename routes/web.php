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

Route::get('/', 'HomeController@index')->name('home');
Route::get('home', 'HomeController@index')->name('home');
\Illuminate\Support\Facades\Auth::routes();
Route::resource('users', 'UsersController')->except(['destroy']);
Route::get('users/{user}/lock', 'UsersController@lock')->name('users.lock');
Route::get('users/{user}/unlock', 'UsersController@unlock')->name('users.unlock');
Route::put('users/{user}/roles', 'UsersController@permissionsUpdate')->name('users.permissions.update');
Route::resource('roles', 'RolesController');
Route::resource('roles', 'RolesController');
Route::resource('requests', 'RequestsController');
Route::get('statuses', 'RequestsStatusesController@index')->name('statuses');
Route::get('priorities', 'RequestsPrioritiesController@index')->name('priorities');
// Route::get('requests', 'RequestsController@index')->name('requests');
Route::get('sale', 'SaleController@index')->name('sale');
Route::get('rent', 'RentController@index')->name('rent');
Route::get('real_estate', 'RealEstateController@index')->name('real_estate');
// Route::get('realtors', function () {
//     return view('welcome');
// });
// Route::get('buy', function () {
//     return view('welcome');
// });
// Route::get('sale', function () {
//     return view('welcome');
// });
// Route::get('rent', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
