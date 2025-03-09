<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware(['guest'])->group(function () {
    //ログインフォーム
    Route::get('/',  [AuthController::class,
    'showLogin'])->name('login.show');

    //ログイン画面
    Route::post('login',
    [AuthController::class, 'login'])->name('login');
});

Route::middleware(['auth'])->group(function () {
   //ホーム画面
Route::get('home', function() {
    return view('login.home');
  })->name('home');
  //　ログアウト
  Route::post('logout',[AuthController::class, 'logout'])->name('logout');
});

    // 会員登録フォーム
Route::get('register', [AuthController::class, 'showRegister'])->name('register.show');

    // 会員登録処理
Route::post('register', [AuthController::class, 'register'])->name('register');

    //掲示板
Route::resource('posts', PostController::class);

// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');


