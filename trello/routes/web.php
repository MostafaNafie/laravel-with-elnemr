<?php

use App\Http\Controllers\BoardListsController;
use App\Http\Controllers\BoardsController;
use App\Http\Controllers\CardsController;
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

// boards
Route::resource('/', BoardsController::class);
// lists
Route::resource('/lists', BoardListsController::class);
Route::get('/lists/create/{boardID}', [BoardListsController::class, 'create'])->name('create');
// cards
Route::resource('/cards', CardsController::class);
Route::get('/cards/create/{listID}', [CardsController::class, 'create'])->name('create');
