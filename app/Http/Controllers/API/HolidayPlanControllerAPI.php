<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\HolidayPlan;
use App\Http\Requests\HolidayPlanRequest;
use Illuminate\Support\Facades\DB;

class HolidayPlanControllerAPI extends Controller
{
    // private $holidayPlanRepository;

    // public function __construct(HolidayPlanRepository $holidayPlanRepository) {
    //     $this->holidayPlanRepository = $holidayPlanRepository;
    // }

    public function index() {
        // Tela inicial do projeto
        // $holidayPlans = $this->holidayPlanRepository->allHolidays();
        // dd($holidayPlans);
        return view('index');
    }

    public function create() {
        return view('add_holiday_plan');
    }

    public function store(HolidayPlanRequest $request) {
        // Adiciona holiday no banco de dados
        
        DB::beginTransaction();
        
        try {
                DB::commit();
                $holidayPlan = $request->validated();
                $holidayPlan = new HolidayPlan($request->all());
                $holidayPlan->save();

            response()->json([
                'message' => 'Holiday Plan created successfully',
                'data' => $holidayPlan,
            ], 201);
            
            return redirect()->route('index')->with('sucesso', 'Success when creating your holidays');

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show(string $id) {
        // Mostra holiday especifica na tela
    }

    public function edit($id) {
        $holiday = HolidayPlan::findOrFail($id);
        return view('update_holiday_plan');
    }

    public function update(HolidayPlanRequest $request, string $id): JsonResponse {
        // Atualiza holiday especifica no banco de dados

        $holidayPlan = HolidayPlan::findOrFail($id);
        $holidayPlan->update($request->validated());

        return response()->json([
            'message' => 'Holiday Plan updated successfully',
            'data' => $holidayPlan,
        ], 200);
    }

    public function destroy(string $id) {
        // Apaga holiday do banco de dados
    }

    public function generatePDF(Request $request) {
        // Funcao para gerar o pdf da holiday
    }
}