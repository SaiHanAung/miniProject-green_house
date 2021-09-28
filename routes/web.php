<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Providers\ArtisanServiceProvider;
// use App\Http\Controllers\DashboardController;

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
    return view('auth.login');
});

Route::get('/lay', function() {
    return view('dashboard.lay');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/log', 'SwitchLogController@index')->name('save');

Route::resource('dashboard', DashboardController::class);

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


Route::get('dashboard1/{id}', 'DashboardController@da')->name('da');
Route::get('dashboard2/{id}', 'DashboardController@da2')->name('da2');
Route::get('dashboard3/{id}', 'DashboardController@da3')->name('da3');
Route::get('dashboard4/{id}', 'DashboardController@da4')->name('da4');
Route::get('dashboard5/{id}', 'DashboardController@da5')->name('da5');
Route::get('dashboard6/{id}', 'DashboardController@da6')->name('da6');
Route::get('dashboard7/{id}', 'DashboardController@da7')->name('da7');
Route::get('dashboard8/{id}', 'DashboardController@da8')->name('da8');