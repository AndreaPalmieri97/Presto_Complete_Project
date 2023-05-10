<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [PublicController::class, 'homePage'])->name('home');

Route::get('/crea', [ArticleController::class, 'create'])->name('annunci');

Route::post('/store-article', [ArticleController::class, 'store'])->name('store-article');

Route::get('thanks', [ArticleController::class, 'thanks'])->name('thanks');

Route::get('index-article', [ArticleController::class, 'index'])->name('index-article');
