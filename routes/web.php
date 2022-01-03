<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChallengeController;

Route::get('/', [ChallengeController::class, 'index'])->name('index');
Route::get('/confirm', [ChallengeController::class, 'confirm'])->name('confirm');
Route::post('/add', [ChallengeController::class, 'add'])->name('add');