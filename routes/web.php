<?php

use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\NewsController;
use \App\Http\Controllers\AboutController;

use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ParserController;
use \App\Http\Controllers\LocaleController;

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
/ Lacale */
Route::get('/locale/{locale}', [LocaleController::class, 'changeLocale'])
    ->where('locale', '\w+')
    ->name('changeLocale');


/* --------
/ Home -- ui auth */
Auth::routes();
Route::get('/', [HomeController::class, 'index'])
    ->name('home');
//Route::get('/home', [HomeController::class, 'index'])->name('home');


/* -------
/ Home_Old -- before install ui auth */

//Route::get('/', '\App\Http\Controllers\HomeController@home');
//Route::get('/', [HomeController::class, 'home'])
//    ->name('root');


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
        ->where('id', '[0-9]+')
        ->name('list');
    Route::get('/card/{id}', [NewsController::class, 'showCard'])
        ->where('id', '[0-9]+')
        ->name('card');
});


// for lesson5
Route::get('/db', [\App\Http\Controllers\DbController::class, 'index'])
    ->name('news-db');

/* --------
/ Admin */
Route::group([
    'prefix' => 'admin',
    'as' => 'admin::',
    'middleware' => ['auth', 'is_admin']
], function() {
    Route::get('/', [AdminController::class, 'admin'])
        ->name('panel');
//    Route::match(['get', 'post'],'/add', [AdminController::class, 'add'])
//        ->name('add');

    Route::get('/showNews', [AdminController::class, 'allNews'])
        ->name('showNews');
    Route::get('/showCategories', [AdminController::class, 'allCategories'])
        ->name('showCategories');
    Route::get('/showUsers', [AdminController::class, 'allUsers'])
        ->name('showUsers');

    Route::get('/addNews/{id?}', [AdminController::class, 'addNews'])
        ->name('addNews');
    Route::get('/addCategory/{id?}', [AdminController::class, 'addCategory'])
        ->name('addCategory');
    Route::get('/addUser/{id?}', [AdminController::class, 'addUser'])
        ->name('addUser');

    Route::post('imgUpload/{id?}', [AdminController::class, 'newsImgUpload'])
        ->name('newsImgUpload');

    Route::post('/addNews/{id?}', [AdminController::class, 'saveNews'])
        ->name('saveNews');
    Route::post('/addCategory/{id?}', [AdminController::class, 'saveCategory'])
        ->name('saveCategory');
    Route::post('/addUser/{id?}', [AdminController::class, 'saveUser'])
        ->name('saveUser');

    Route::post('/deleteNews/{id}', [AdminController::class, 'deleteNews'])
        ->name('deleteNews');
    Route::post('/deleteCategory/{id}', [AdminController::class, 'deleteCategory'])
        ->name('deleteCategory');
    Route::post('/deleteUser/{id}', [AdminController::class, 'deleteUser'])
        ->name('deleteUser');

    Route::get('/parser', [ParserController::class, 'index'])
        ->name('parser');
});


/* --------
/ Social */
Route::group([
    'prefix' => 'social',
    'as' => 'social::',
], function () {
    Route::get('/login', [SocialController::class, 'loginFb'])
        ->name('login-fb');
    Route::get('/response', [SocialController::class, 'responseFb'])
        ->name('response-fb');
});

