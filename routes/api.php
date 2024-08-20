<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\HolidayPlanControllerAPI;
use App\Http\Controllers\API\RegisterController;
use Illuminate\Support\Facades\Auth;

Route::get('/register', [RegisterController::class, 'getRegister'])->name('api.getRegister');

Route::get('/index', [HolidayPlanControllerAPI::class, 'index'])->name('index');

Route::post('register', [RegisterController::class, 'register'])->name('api.register');;
Route::post('login', [RegisterController::class, 'login'])->name('api.login');;

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