<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\HolidayPlanControllerAPI;


// Route::middleware('auth:api')->group(function () {
    Route::resource('holiday', HolidayPlanControllerAPI::class)->names([
        'index' => 'holiday.index',
        'create' => 'holiday.add',
        'store' => 'holiday.save',
        'show' => 'holiday.show',
        'edit' => 'holiday.edit',
        'update' => 'holiday.update',
        'destroy' => 'holiday.destroy',
    ]);
// });