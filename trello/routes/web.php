<?php

use App\Http\Controllers\BoardListsController;
use App\Http\Controllers\BoardsController;
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

Route::resource('/', BoardsController::class);
Route::resource('/lists', BoardListsController::class);
Route::get('/lists/create/{boardID}', [BoardListsController::class, 'create'])->name('create');
