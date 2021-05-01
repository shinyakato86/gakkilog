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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/post/new', [App\Http\Controllers\PostController::class, 'create'])->name('post.new');

Route::get('/post', [App\Http\Controllers\PostController::class, 'list'])->name('post.list');

Route::post('/post/create', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

Route::get('/post/detail/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('post.detail');

Route::post('/post/comment/{id}', [App\Http\Controllers\PostController::class, 'addComment'])->name('post.addComment');
