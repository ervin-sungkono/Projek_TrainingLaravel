<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServerApiController;

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

Route::get('/server', [ServerApiController::class, 'index']);
Route::get('/server/detail/{id}', [ServerApiController::class, 'viewDetail']);
Route::post('/server/store', [ServerApiController::class, 'store']);
Route::patch('/server/update/{id}', [ServerApiController::class , 'update']);
Route::delete('/server/delete/{id}', [ServerApiController::class , 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
