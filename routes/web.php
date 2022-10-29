<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
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
    return view('layouts/layout');
});

// Author Routes

Route::get('/authors/search', [AuthorController::class, 'search'])->name('search_author') ;
Route::get('/authors', [AuthorController::class, 'index']) ;
Route::get('/authors/new', [AuthorController::class, 'new']) ;
Route::post('/authors/create', [AuthorController::class, 'create'])->name('create_author') ;
Route::get('/authors/{id}/show', [AuthorController::class, 'show']) ;
Route::get('/authors/{id}/edit', [AuthorController::class, 'edit']) ;
Route::put('/authors/update/{id}', [AuthorController::class, 'update'])->name('update_author') ;
Route::get('/authors/{id}', [AuthorController::class, 'delete']) ;

// Book Routes
Route::get('/books/search', [BookController::class, 'search'])->name('search_book') ;
Route::get('/books', [BookController::class, 'index']) ;
Route::get('/books/new', [BookController::class, 'new']) ;
Route::post('/books/create', [BookController::class, 'create'])->name('create_book') ;
Route::get('/books/{id}/show', [BookController::class, 'show']) ;
Route::get('/books/{id}/edit', [BookController::class, 'edit']) ;
Route::put('/books/{id}/update', [BookController::class, 'update'])->name('update_book') ;
Route::get('/books/{id}', [BookController::class, 'delete']) ;


