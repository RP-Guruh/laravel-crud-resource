<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::resource('event', EventController::class);
