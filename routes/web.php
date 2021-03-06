<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AdminController;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('game');
})->middleware(['auth'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [GameController::class, 'index'])->name('game.index');
    Route::get('get-word', [GameController::class, 'getWord'])->name('game.word');
    Route::post('check-answer', [GameController::class ,'checkAnswer'])->name('game.answer');
});

Route::get('admin', [AdminController::class, 'index'])->name('admin.index');

require __DIR__.'/auth.php';
