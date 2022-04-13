<?php

use App\Http\Controllers\UserContorller;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserContorller::class, 'index']);

\Log::info('in route');
Route::get('/user/{id}', [UserContorller::class, 'getSingleUser'])->name('viewuser');
