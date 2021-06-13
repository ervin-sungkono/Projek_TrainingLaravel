<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', [GameController::class, 'index'])->name('gameaccount.home');
Route::post('/gameaccount', [GameController::class, 'store'])->name('gameaccount.create');
Route::get('/gameaccount', [GameController::class, 'viewList'])->name('gameaccount.list');
Route::get('/gameaccount/edit/{id}',[GameController::class, 'edit'])->name('gameaccount.edit');
Route::patch('/gameaccount/{id}', [GameController::class , 'update'])->name('gameaccount.update');
Route::delete('/gameaccount/{id}', [GameController::class , 'delete'])->name('gameaccount.delete');
