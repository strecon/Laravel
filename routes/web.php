<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\NewsController;
use \App\Http\Controllers\AboutController;

use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\Admin\AdminController;

use Illuminate\Http\Request;


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

/* --------
/ Admin */
Route::group([
    'prefix' => 'admin',
    'as' => 'admin::'
], function() {
    Route::get('/', [AdminController::class, 'admin'])
        ->name('panel');
//    Route::match(['get', 'post'],'/add', [AdminController::class, 'add'])
//        ->name('add');
    Route::get('/add', [AdminController::class, 'add'])
        ->name('add');
    Route::post('/add', [AdminController::class, 'save'])
        ->name('save');
    Route::get('/show', [AdminController::class, 'show'])
        ->name('show');
    Route::get('/update', [AdminController::class, 'update'])
        ->name('update');
    Route::get('/delete', [AdminController::class, 'delete'])
        ->name('delete');
});

/* --------
/ Authorisation */

Route::get('auth', [AuthController::class,'auth'])
    ->name('auth');
Route::post('auth', [AuthController::class,'save'])
    ->name('auth::save');
//Route::match(['get', 'post'],'auth', [AuthController::class,'auth'])
//    ->name('auth');
