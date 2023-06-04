<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [HomeController::class, 'index']);


Route::get('/', [PostController::class, 'index'])->name('news.index');

Route::middleware(['jwt.auth'])->group(function()
{
        Route::post('/login', [LoginController::class])->name('auth.login');
        Route::get('/news/create', [PostController::class, 'create'])->name('news.create');
        Route::post('/', [PostController::class, 'store'])->name('news.store');
        Route::get('/news/{post}/edit', [PostController::class, 'edit'])->name('news.edit');
        Route::patch('/news/{post}', [PostController::class, 'update'])->name('news.update');
        Route::delete('/news/{post}', [PostController::class, 'destroy'])->name('news.destroy');
});


Route::get('/news/{post}', [PostController::class, 'show'])->name('news.show');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');