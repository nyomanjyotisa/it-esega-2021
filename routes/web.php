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
    Route::prefix('mobilelegend')->group(function(){
        Route::get('/', 'MobileLegendController@index');
        Route::get('/detail/{id}', 'MobileLegendController@detail');
        Route::get('/setpaid/{id}', 'MobileLegendController@setpaid');
    });
    Route::prefix('pubgm')->group(function(){
        Route::get('/', 'PubgmController@index');
        Route::get('/detail/{id}', 'PubgmController@detail');
        Route::get('/setpaid/{id}', 'PubgmController@setpaid');
    });
    Route::prefix('valorant')->group(function(){
        Route::get('/', 'ValorantController@index');
        Route::get('/detail/{id}', 'ValorantController@detail');
        Route::get('/setpaid/{id}', 'ValorantController@setpaid');
    });
});

Route::prefix('daftar')->group(function(){
    Route::prefix('mobilelegend')->group(function(){
        Route::get('/', function () {
            return view('mobileLegend');
        });
        Route::post('/submit', 'DaftarController@mobilelegend');
    });
    Route::prefix('pubgm')->group(function(){
        Route::get('/', function () {
            return view('pubgm');
        });
        Route::post('/submit', 'DaftarController@pubgm');
    });
    Route::prefix('valorant')->group(function(){
        Route::get('/', function () {
            return view('valorant');
        });
        Route::post('/submit', 'DaftarController@valorant');
    });
});