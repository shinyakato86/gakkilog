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

Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('index');

Route::get('/post/new', [App\Http\Controllers\PostController::class, 'create'])->name('post.new');

Route::get('/posts', [App\Http\Controllers\PostController::class, 'list'])->name('post.list');

Route::post('/post/create', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

Route::get('/post/detail_{id}', [App\Http\Controllers\PostController::class, 'show'])->name('post.detail');

Route::post('/post/comment_{id}', [App\Http\Controllers\PostController::class, 'addComment'])->name('post.addComment');

Route::delete('/post/detail_{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');

Route::get('/users/mypage', [App\Http\Controllers\MypageController::class, 'index'])->name('mypage');

Route::get('/users/mypage/edit', [App\Http\Controllers\MypageController::class, 'edit'])->name('mypage.edit');

Route::post('/users/mypage/update', [App\Http\Controllers\MypageController::class, 'update'])->name('mypage.update');

Route::get('/users/mypage/delete_check', [App\Http\Controllers\MypageController::class, 'delete_check'])->name('mypage.delete_check');

Route::post('/users/mypage/delete', [App\Http\Controllers\MypageController::class, 'delete'])->name('mypage.delete');
