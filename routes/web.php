<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers;

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

Route::get('/', [Controllers\PageController::class, 'index'])->name('index');

Route::get('about', [Controllers\PageController::class, 'about'])->name('about');

Route::get('articles', [Controllers\ArticleController::class, 'index'])->name('articles.index');

Route::get('articles/create', [Controllers\ArticleController::class, 'create'])->name('articles.create');

Route::post('articles', [Controllers\ArticleController::class, 'store'])->name('articles.store');

Route::get('articles/{id}', [Controllers\ArticleController::class, 'show'])->name('articles.show');
