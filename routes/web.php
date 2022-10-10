<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserContorller;

Route::get('/', [UserContorller::class, 'index']);
Route::get('/users/add', [UserContorller::class, 'storeUsers'])->name('store.users');
