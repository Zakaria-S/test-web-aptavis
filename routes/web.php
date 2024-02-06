<?php

use App\Http\Controllers\PertandinganController;
use App\Http\Controllers\TeamController;
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

Route::get('/', [TeamController::class, 'index']);

Route::get('/create-team', [TeamController::class, 'create']);
Route::post('/create-team', [TeamController::class, 'store']);

Route::get('/create-pertandingan', [PertandinganController::class, 'create']);
Route::post('/create-pertandingan', [PertandinganController::class, 'store']);
