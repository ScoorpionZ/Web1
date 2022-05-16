<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngatlanokController;
use App\Http\Controllers\KategoriakController;




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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ingatlan', [IngatlanokController::class, 'index']);
Route::put('/ingatlan/{id}', [IngatlanokController::class, 'update']);
Route::post('/ingatlan', [IngatlanokController::class, 'store']);
Route::delete('/ingatlan/{id}', [IngatlanokController::class, 'delete']);

Route::get('/kategoriak', [KategoriakController::class, 'index']);
Route::post('/kategoriak', [KategoriakController::class, 'store']);
Route::delete('/kategoriak/{id}', [KategoriakController::class, 'delete']);
