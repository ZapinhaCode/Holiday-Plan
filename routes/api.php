<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\HolidayPlanControllerAPI;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HolidayPlanControllerAPI::class, 'index'])->name('index');

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::resource('holiday', HolidayPlanControllerAPI::class)->names([
        'index' => 'holiday.index',
        'create' => 'holiday.add',
        'store' => 'holiday.save',
        'show' => 'holiday.show',
        'edit' => 'holiday.edit',
        'update' => 'holiday.update',
        'destroy' => 'holiday.destroy',
    ]);
});
