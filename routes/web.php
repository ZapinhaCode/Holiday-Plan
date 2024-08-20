<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

Route::get('/holiday/generate-pdf/{id}', [PDFController::class, 'generatePDF'])->name('holiday.generatePDF');