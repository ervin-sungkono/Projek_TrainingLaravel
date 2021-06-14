<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ServerController;

Route::get('/', [GameController::class, 'index'])->name('gameaccount.home');
Route::post('/gameaccount', [GameController::class, 'store'])->name('gameaccount.create');
Route::get('/gameaccount', [GameController::class, 'viewList'])->name('gameaccount.list');
Route::get('/gameaccount/edit/{id}',[GameController::class, 'edit'])->name('gameaccount.edit');
Route::patch('/gameaccount/{id}', [GameController::class , 'update'])->name('gameaccount.update');
Route::delete('/gameaccount/{id}', [GameController::class , 'delete'])->name('gameaccount.delete');
Route::get('/server', [ServerController::class, 'index'])->name('server.home');
Route::get('/server/list', [ServerController::class, 'viewList'])->name('server.list');
Route::get('/server/detail/{id}', [ServerController::class, 'viewDetail'])->name('server.detail');
Route::post('/server/store', [ServerController::class, 'store'])->name('server.store');
Route::get('/server/edit/{id}',[ServerController::class, 'edit'])->name('server.edit');
Route::patch('/server/update/{id}', [ServerController::class , 'update'])->name('server.update');
Route::delete('/server/delete/{id}', [ServerController::class , 'delete'])->name('server.delete');
