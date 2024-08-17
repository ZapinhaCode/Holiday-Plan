<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\HolidayPlanControllerAPI;

Route::get('/', function () {
    return redirect('/api');
});
