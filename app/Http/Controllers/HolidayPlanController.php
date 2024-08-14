<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HolidayPlan;
use Carbon\Carbon;
use App\Http\Requests\HolidayPlanRequest;

class HolidayPlanController extends Controller
{

    public function index() {
        // Tela inicial do projeto
    }

    public function generatePDF(Request $request) {
        // Funcao para gerar o pdf da holiday
    }
}