<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TylerController;
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

/*
Route::get('/posts', [TylerController::class, 'showList']);
Route::get('/reurl', [TylerController::class, 'reurl']);
Route::get('/postpara/{id?}', [TylerController::class, 'para']);
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/test', [HomeController::class, 'test']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
