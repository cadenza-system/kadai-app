<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FollowController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login',  [LoginController::class, 'login']);
Route::post('/logout',  [LoginController::class, 'logout']);

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/detail/{id}', [PostController::class, 'show']);
Route::get('/post/edit/{id}', [PostController::class, 'edit']);
Route::put('/post/edit/{id}', [PostController::class, 'update']);
Route::post('/post', [PostController::class, 'store']);

Route::get('/user/{id}', [UserController::class, 'index']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::put('/user/edit/{id}', [UserController::class, 'update']);

Route::get('user/{id}/follow', [FollowController::class, 'index']);
Route::get('user/{id}/follower', [FollowController::class, 'index']);

Route::put('follow/{id}',[FollowController::class, 'update']);
