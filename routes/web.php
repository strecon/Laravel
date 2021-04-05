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

/*
/ Home
*/

//Route::get('/', function () {
////    return "<h3>I am Home!</h3>";
//    return view('home');
//});

Route::get('/', '\App\Http\Controllers\HomeController@home');

/*
/ About
*/
//Route::get('/about', function () {
//     return view('about');
//});

Route::get('/about', '\App\Http\Controllers\AboutController@about');

/*
 / News
*/
//Route::get('/news/{id}/{text}', function ($id, $text) {
//    return 'id: ' . $id . '<br>News: ' . $text;
////    return view('news');
//});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news/category/{id}/{category}', function () {
    return view('newsCategory');
});

Route::get('/news/category/item/{id}/{text}', function () {
    return view('newsCategoryItem');
});


/*
/ Admin
*/
