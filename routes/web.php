<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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
    'showLogin'])->name('showLogin');

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