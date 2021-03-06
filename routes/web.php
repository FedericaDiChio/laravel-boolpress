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

// ROTTE CON AUTENTICAZIONE 
Route::get('/', function () {
    return view('guest.home');
});

Auth::routes();

Route::middleware('auth')->name('admin.')->prefix('admin')->namespace('Admin')->group(function()  {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts','PostController');
    // Route::get('/{any}', function(){
    //     abort(404);
    // });
});


// ALTRE ROTTE
Route::get('{any?}', function() {
	Return view('guest.home');
})->where('any', '.*');