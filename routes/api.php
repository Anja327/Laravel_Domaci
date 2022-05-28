<?php

use App\Http\Controllers\AutfController;
use App\Http\Controllers\TvController;
use App\Http\Controllers\VdtController;
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

Route::post('register', [AutfController::class, 'register']);
Route::post('login', [AutfController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('televizija', TvController::class);
    Route::resource('voditelj', VdtController::class);
    Route::post('logout', [AutfController::class, 'logout']);
});
