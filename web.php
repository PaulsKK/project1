<?php
// routes/web.php

use App\Http\Controllers\CustomPageController;
 
Route::get('/', [CustomPageController::class, 'index']);

