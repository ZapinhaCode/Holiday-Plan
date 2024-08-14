<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolidayPlanController;

Route::get('/', function () {
    return view('welcome');
});
