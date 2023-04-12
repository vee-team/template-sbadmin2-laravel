<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/buttons', [MainController::class, 'buttons']);
Route::get('/cards', [MainController::class, 'cards']);
Route::get('/utilities-color', [MainController::class, 'utilities_color']);
Route::get('/utilities-border', [MainController::class, 'utilities_border']);
Route::get('/utilities-animation', [MainController::class, 'utilities_animation']);
Route::get('/utilities-other', [MainController::class, 'utilities_other']);
Route::get('/charts', [MainController::class, 'charts']);
Route::get('/tables', [MainController::class, 'tables']);
