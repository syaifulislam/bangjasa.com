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

Route::get('/', 'DashboardController@index');

Route::get('/lang/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return response()->json([
        "message" => "success"
    ]);
});

Route::get('/about', function () {
    $locale=Session::get('locale', Config::get('app.locale'));
    App::setLocale($locale);
    return view('about');
});
