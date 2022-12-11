<?php

use App\Http\Controllers\ProvideDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/available-slots', [ProvideDataController::class, 'getSlot']);
Route::post('/check-in', [ProvideDataController::class, 'userCheckIn']);
Route::post('/check-out', [ProvideDataController::class, 'userCheckOut']);
Route::post('/turn-on/{id_light}', [ProvideDataController::class, 'turnOnLight']);
Route::post('/turn-off/{id_light}', [ProvideDataController::class, 'turnOffLight']);