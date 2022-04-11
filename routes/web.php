<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserContorller;

Route::get('/', [UserContorller::class, 'index']);
Route::get('/singleuser/{id}', [UserContorller::class, 'singleuser']); //5.a
