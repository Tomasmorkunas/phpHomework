<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ArticlesController::class, 'index'])->name('conference.index');

Route::resource('articles', ArticlesController::class);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('lang/change/{lang}', [LangController::class, 'change'])->name('lang.change');
