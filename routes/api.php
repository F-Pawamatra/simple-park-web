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

Route::get('/available-slot', [ProvideDataController::class, 'getSlot']);
Route::get('/check-slot/{id_slot}', [ProvideDataController::class, 'getSlotStatus']);
Route::post('/check-in/{id_slot}', [ProvideDataController::class, 'userCheckIn']);
Route::post('/check-out/{id_slot}', [ProvideDataController::class, 'userCheckOut']);
Route::post('/turn-on/{id_light}', [ProvideDataController::class, 'turnOnLight']);
Route::post('/turn-off/{id_light}', [ProvideDataController::class, 'turnOffLight']);