<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\HolidayPlanControllerAPI;

Route::get('/', [HolidayPlanControllerAPI::class, 'index'])->name('index');

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/store', [HolidayPlanControllerAPI::class, 'store'])->name('holiday.save');


Route::resource('/', HolidayPlanControllerAPI::class)->names([
    'create' => 'holiday.add',
    'show' => 'holiday.show',
    'edit' => 'holiday.edit',
    'update' => 'holiday.update',
    'destroy' => 'holiday.destroy',
]);
