<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\AdminController;

Route::middleware(['auth:sanctum', 'verified'])->get('/', [GameController::class, 'index'])->name('gameaccount.home');
Route::middleware(['auth:sanctum', 'verified'])->post('/gameaccount', [GameController::class, 'store'])->name('gameaccount.create');
Route::middleware(['auth:sanctum', 'verified'])->get('/gameaccount', [GameController::class, 'viewList'])->name('gameaccount.list');
Route::middleware(['auth:sanctum', 'verified'])->get('/gameaccount/edit/{id}',[GameController::class, 'edit'])->name('gameaccount.edit');
Route::middleware(['auth:sanctum', 'verified'])->patch('/gameaccount/{id}', [GameController::class , 'update'])->name('gameaccount.update');
Route::middleware(['auth:sanctum', 'verified'])->delete('/gameaccount/{id}', [GameController::class , 'delete'])->name('gameaccount.delete');

Route::middleware(['auth:sanctum', 'verified'])->get('/server', [ServerController::class, 'index'])->name('server.home');
Route::middleware(['auth:sanctum', 'verified'])->get('/server/list', [ServerController::class, 'viewList'])->name('server.list');
Route::middleware(['auth:sanctum', 'verified'])->get('/server/detail/{id}', [ServerController::class, 'viewDetail'])->name('server.detail');
Route::middleware(['auth:sanctum', 'verified'])->post('/server/store', [ServerController::class, 'store'])->name('server.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/server/edit/{id}',[ServerController::class, 'edit'])->name('server.edit');
Route::middleware(['auth:sanctum', 'verified'])->patch('/server/update/{id}', [ServerController::class , 'update'])->name('server.update');
Route::middleware(['auth:sanctum', 'verified'])->delete('/server/delete/{id}', [ServerController::class , 'delete'])->name('server.delete');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'admin'], function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});
