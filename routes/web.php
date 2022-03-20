<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserContorller;
use App\Http\Controllers\DetailsController;

Route::get('/', [UserContorller::class, 'show']);
Route::get('details', [DetailsController::class, 'show']);





