<?php

use App\Http\Controllers\UserContorller;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserContorller::class, 'index']);