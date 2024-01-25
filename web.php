<?php
// routes/web.php

use App\Http\Controllers\CustomPageController;
use App\Http\Controllers\YourController;

Route::get('/', [CustomPageController::class, 'index']);
Route::get('/show-data', [YourController::class, 'showData']);


