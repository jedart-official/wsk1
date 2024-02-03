<?php

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

Route::get('/', \App\Http\Controllers\app\AuthController::class);
Route::get('/logout', \App\Http\Controllers\app\LogoutController::class)->name('logout');
Route::post('/register', \App\Http\Controllers\app\RegisterController::class)->name('register');
Route::post('/place', \App\Http\Controllers\app\PlaceController::class);
Route::post('/send/message', [\App\Http\Controllers\app\ChatController::class, 'sendMessage'])->name('message');
Route::get('/update/position', [\App\Http\Controllers\app\DataController::class, 'actionPosition']);
Route::get('/update/room', [\App\Http\Controllers\app\DataController::class, 'actionRoom']);
