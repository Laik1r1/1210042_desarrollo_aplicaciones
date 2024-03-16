<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/',[App\Http\Controllers\Controller::class,'landingpage'])->name('landingpage');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/article', [App\Http\Controllers\ArticleController::class, 'index'])->name('article');
Route::get('/create/articles', [App\Http\Controllers\ArticleController::class, 'makeNew'])->name('articles');
Route::get('/edit/articles/{id}', [App\Http\Controllers\ArticleController::class, 'editArticle'])->name('articles.edit');
Route::put('/update/articles/{id}', [App\Http\Controllers\ArticleController::class, 'edit'])->name('articles.update');
Route::post('/create/articles', [App\Http\Controllers\ArticleController::class,'create'])->name('article.create');
Route::get('/delete/articles/{id}',[App\Http\Controllers\ArticleController::class,'delete'])->name('article.delete');

//Categories
//INDEX
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('categoryIndex');
//FORM EDITAR
Route::get('/edit/categories/{id}',[App\Http\Controllers\CategoryController::class, 'editCategory'])->name('categories.edit');
//ACCION EDITAR
Route::put('/update/categories/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.update');
//ACCION ELIMINAR
Route::get('/delete/categories/{id}', [App\Http\Controllers\CategoryController::class,'delete'])->name('category.delete');
//CREAR
Route::get('/create/categories', [App\Http\Controllers\CategoryController::class, 'makeNew'])->name('category');
//CREAR POST
Route::post('/create/categories', [App\Http\Controllers\CategoryController::class,'create'])->name('category.create');
//LANDING VIEW MORE
Route::get('/article/view/{id}', [App\Http\Controllers\ArticleController::class,'show'])->name('article.show');
