<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\HolidayPlan;
use App\Http\Requests\HolidayPlanRequest;

class HolidayPlanControllerAPI extends Controller
{
    public function index() {
        // Tela inicial do projeto
        response()->json([
            'mensagem' => 'Esta é a resposta da rota principal da API!',
        ]);
        return view('index');
    }

    public function store(HolidayPlanRequest $request): JsonResponse {
        // Adiciona holiday no banco de dados

        $holidayPlan = HolidayPlan::create($request->validated());

        return response()->json([
            'message' => 'Holiday Plan created successfully',
            'data' => $holidayPlan,
        ], 201);
    }

    public function show(string $id) {
        // Mostra holiday especifica na tela
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