<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

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

Route::get('/crea', [ArticleController::class, 'create'])->name('annunci')->middleware('auth');

Route::post('/store-article', [ArticleController::class, 'store'])->name('store-article');

Route::get('thanks', [ArticleController::class, 'thanks'])->name('thanks');

Route::get('index-article', [ArticleController::class, 'index'])->name('index-article');

Route::get('show-details-article{article}', [ArticleController::class, 'show'])->name('show-details-article');

Route::get('/filter-category/{id}', [ArticleController::class, 'filterCategory'])->name('show.category');

Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

Route::patch('/accetta/annuncio/{article}', [RevisorController::class, 'acceptArticle'])->middleware('isRevisor')->name('revisor.accept_article');

Route::patch('/rifiuta/annuncio/{article}', [RevisorController::class, 'rejectArticle'])->middleware('isRevisor')->name('revisor.reject_article');

Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

Route::post('/lavora-con-noi', [RevisorController::class, 'store'])->name('become.revisor.store');
 
Route::get('/ricerca/articoli', [ArticleController::class, 'searchArticle'])->name('search.article');