<?php

use App\Http\Controllers\LightMonitoringController;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\UserEntryController;
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

Route::get('/', function () {
    return redirect('slots');
});

Route::resource('slots', SlotController::class);
Route::resource('user-entries', UserEntryController::class);
Route::resource('light-monitoring', LightMonitoringController::class);