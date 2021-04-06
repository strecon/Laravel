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


/* ----
 / News
*/

//Route::get('/news/{id}/{text}', function ($id, $text) {
//    return 'id: ' . $id . '<br>News: ' . $text;
////    return view('news');
//});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news/category', function () {
    return view('newsCategory');
});

Route::get('/news/category/item', function () {
    return view('newsCategoryItem');
});


/* ----
/ Admin
*/
