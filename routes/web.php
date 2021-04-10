<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\NewsController;
use \App\Http\Controllers\AboutController;

use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\Admin\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
//Route::get('/', function () {
//    return view('welcome');
//});
*/



/* -------
/ Home */

//Route::get('/', '\App\Http\Controllers\HomeController@home');
Route::get('/', [HomeController::class, 'home'])
    ->name('root');

/* --------
/ About */

//Route::get('/about', '\App\Http\Controllers\AboutController@about');
Route::get('/about', [AboutController::class, 'about'])
->name('about');

/* -------
/ News */

//-- Third stage --
Route::group([
    'prefix' => '/news',
    'as' => 'news::',
], function () {
    Route::get('/', [NewsController::class, 'index'])
        ->name('categories');
    Route::get('/list/{category}', [NewsController::class, 'showList'])
        ->name('list');
    Route::get('/card/{id}', [NewsController::class, 'showCard'])
        ->where('id', '[0-9]+')
        ->name('card');
});

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


/* --------
/ Admin */
Route::group([
    'prefix' => 'admin',
    'as' => 'admin::'
], function() {
    Route::get('/', [AdminController::class, 'admin'])
        ->name('panel');
    Route::get('/add', [AdminController::class, 'add'])
        ->name('add');
    Route::get('/show', [AdminController::class, 'show'])
        ->name('show');
    Route::get('/update', [AdminController::class, 'update'])
        ->name('update');
    Route::get('/delete', [AdminController::class, 'delete'])
        ->name('delete');
});

/* --------
/ Autorisation */
Route::get('auth', [AuthController::class,'auth'])
    ->name('auth');
