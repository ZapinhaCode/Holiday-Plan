<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\HolidayPlanControllerAPI;

Route::get('/', [HolidayPlanControllerAPI::class, 'index'])->name('index');

Route::get('/register', [HolidayPlanControllerAPI::class, 'create'])->name('register');
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::resource('holiday', HolidayPlanControllerAPI::class)->names([
    'create' => 'holiday.add',
    'store' => 'holiday.save',
    'show' => 'holiday.show',
    'edit' => 'holiday.edit',
    'update' => 'holiday.update',
    'destroy' => 'holiday.destroy',
]);
