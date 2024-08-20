<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\HolidayPlan;

class PDFController extends Controller
{
    public function generatePDF($id) {
        $holidayPlan = HolidayPlan::findOrFail($id);

        $data = [
            'date' => date('Y-m-d'),
            'holidayPlan' => $holidayPlan
        ];

        $pdf = PDF::loadView('pdf.layout', $data);

        return $pdf->download('holidayPlan.pdf');
    }

}
