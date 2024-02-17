<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/article', [App\Http\Controllers\ArticleController::class, 'index'])->name('article');
Route::get('/create/articles', [App\Http\Controllers\ArticleController::class, 'makeNew'])->name('articles');
Route::get('/edit/articles/{id}', [App\Http\Controllers\ArticleController::class, 'editArticle'])->name('articles.edit');
Route::put('/update/articles/{id}', [App\Http\Controllers\ArticleController::class, 'edit'])->name('articles.update');
Route::post('/create/articles', [App\Http\Controllers\ArticleController::class,'create'])->name('article.create');
Route::get('/delete/articles/{id}',[App\Http\Controllers\ArticleController::class,'delete'])->name('article.delete');