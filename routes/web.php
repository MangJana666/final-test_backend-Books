<?php

use App\Models\Authors;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\RatingsController;

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

Route::get('/', [BooksController::class, 'index'])->name('index');

Route::get('/authors', [AuthorsController::class, 'index'])->name('authors');

Route::get('/rate', [RatingsController::class, 'create'])->name('create.rating');

Route::post('/rate', [RatingsController::class, 'store'])->name('store.rating');
