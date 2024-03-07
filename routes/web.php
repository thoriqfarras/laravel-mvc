<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Models\Events;

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

Route::get('/beranda', [EventController::class, 'index']);
Route::get('/beranda/{slug}', [EventController::class, 'show']);
Route::get('/tambah-event', [EventController::class, 'formAdd']);
Route::get('/beranda/{Event}/edit', [EventController::class, 'edit']);

Route::post('/beranda', [EventController::class, 'store']);
Route::delete('/beranda/{Event}', [EventController::class, 'destroy']);
Route::put('/beranda/{Event}', [EventController::class, 'update']);
