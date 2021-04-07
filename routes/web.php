<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewsController;

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

//Route::get('/', function () {
//    return view('welcome');
//});


/* ----
/ Home
*/

Route::get('/', '\App\Http\Controllers\HomeController@home');


/* ----
/ About
*/

Route::get('/about', '\App\Http\Controllers\AboutController@about');


/* ------
    News
*/
//-- Third stage --
Route::group([
    'prefix' => '/news',
    'as' => 'news::',
], function () {
    Route::get('/', [NewsController::class, 'index'])
        ->name("categories");
    Route::get('/list/{category}', [NewsController::class, 'showList'])
        ->name('list');
    Route::get('/card/{id}', [NewsController::class, 'showCard']) ->where('id', '[0-9]+')
        ->name('card');
});


//-- Second stage --
//Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])
//    ->name("news::catalog");
//
//Route::get('/news/category', [\App\Http\Controllers\NewsController::class, 'showList'])
//    ->where('id', '[0-9]+')
//    ->name('news::categories');
//
//Route::get('/news/card/{id}', [\App\Http\Controllers\NewsController::class, 'showCard'])
//    ->where('id', '[0-9]+')
//    ->name('news::card');


//-- First stage --
//Route::get('/news/{id}/{text}', function ($id, $text) {
//    return 'id: ' . $id . '<br>News: ' . $text;
////    return view('news');
//});

//Route::get('/news', function () {
//    return view('news');
//});

//Route::get('/news/category', function () {
//    return view('newsByCategory');
//});

//Route::get('/news/category/card', function () {
//    return view('newsCard');
//});


/* -------
    Admin
*/
