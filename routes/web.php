<?php

use App\Http\Controllers\frontend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});