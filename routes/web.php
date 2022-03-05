<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [MessagesController::class, 'index']);

Route::get('/category/create', [CategoryController::class, 'create'])->name('create.category');
Route::post('/category/create', [CategoryController::class, 'store'])->name('create.category.store');
Route::get('/category', [CategoryController::class, 'show'])->name('create');

Route::get('/message/{category}', [MessagesController::class, 'create'])->name('create.message');

Route::post('/store', [MessagesController::class, 'store'])->name('message');

Route::get('/message/show/{messages}', [MessagesController::class, 'show'])->name('summary');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
