<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginSystem\LoginController;
use App\Http\Controllers\PlaceController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login/google', [LoginController::class, 'redirectToGoogle']);
Route::get('/login/google/callback', [LoginController::class, 'handleGoogleCallback']);
Route::get('/export-excel', [PlaceController::class, 'exportToExcel']);
