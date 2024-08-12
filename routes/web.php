<?php

use App\Http\Controllers\CgjidelnaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CgjidelnaController::class, 'index']);
Route::get('/food', [CgjidelnaController::class, 'food_info']);
Route::get('/review', [CgjidelnaController::class, 'add_review']);
Route::get('/add', [CgjidelnaController::class, 'add_food']);

