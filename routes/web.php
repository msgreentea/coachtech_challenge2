<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChallengeController;

Route::get('/', [ChallengeController::class, 'index'])->name('index');
Route::get('/confirm', [ChallengeController::class, 'confirm'])->name('confirm');
Route::post('/add', [ChallengeController::class, 'add'])->name('add');
Route::get('/thanks', [ChallengeController::class, 'thanks'])->name('thanks');
Route::get('/system', [ChallengeController::class, 'system'])->name('system');
Route::post('/find', [ChallengeController::class, 'find'])->name('find');
Route::post('/delete', [ChallengeController::class, 'delete'])->name('delete');