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
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return redirect('admin/dashboard');
});
Route::prefix('admin')->group(function(){
    Route::get('/dashboard', function () {
        
        return view('admin/dashboard');
    });
    Route::get('/', function () {
        return redirect('login');
    });
});

Route::prefix('daftar')->group(function(){
    Route::prefix('mobilelegend')->group(function(){
        Route::get('/', function () {
            return view('mobileLegend');
        });
        Route::post('/submit', 'DaftarController@mobilelegend');
    });
});