<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SabunController;

Route::get('/', function () {
    return redirect('/sabun');
});

Route::resource('sabun', SabunController::class);