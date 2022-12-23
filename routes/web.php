<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\NewsController;

Route::resource('news', NewsController::class);
