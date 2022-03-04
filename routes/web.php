<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;
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

Route::get('/message/{sector}', [MessagesController::class, 'create'])->name('create');

Route::post('/store', [MessagesController::class, 'store'])->name('message');

Route::get('/message/show/{messages}', [MessagesController::class, 'show'])->name('summary');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/category', function() {
    return view('category');
});
