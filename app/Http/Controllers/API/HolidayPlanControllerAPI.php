<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\HolidayPlan;
use App\Http\Requests\HolidayPlanRequest;
use App\Http\Resources\HolidayPlanResource;
use Illuminate\Support\Facades\DB;

class HolidayPlanControllerAPI extends Controller
{

    public function index() {
        $holidayPlans = HolidayPlan::all();
        
        $holidayAPI = response()->json([
            'message' => 'Holiday Plan created successfully',
            'data' => $holidayPlans,
        ], 201);

        return view('pages.index', compact('holidayPlans'));
    }

    public function create() {
        return view('pages.add_holiday_plan');
    }

    public function store(HolidayPlanRequest $request) {
        
        DB::beginTransaction();
        
        try {
            $holidayPlan = $request->validated();
            $holidayPlan = new HolidayPlan($request->all());
            $holidayPlan->save();
            DB::commit();
            return redirect()->route('pages.index')->with('sucesso', 'Success when creating your holidays');

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id) {
        $holidayPlan = HolidayPlan::findOrFail($id);
        return view('pages.show_holiday_plan', compact('holidayPlan'));
    }

    public function edit($id) {
        $holidayPlan = HolidayPlan::findOrFail($id);
        return view('pages.update_holiday_plan', compact('holidayPlan'));
    }

    public function update(HolidayPlanRequest $request, $id) {

        DB::beginTransaction();

        try {
            $holidayPlan = HolidayPlan::findOrFail($id);
            $holidayPlan->update($request->validated());    
            DB::commit();
            return redirect()->route('pages.index')->with('sucesso', 'Success when updated your holiday!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id) {

        DB::beginTransaction();

        try {
            $holidayPlan = HolidayPlan::findOrFail($id);
            $holidayPlan->delete();
            DB::commit();
            return redirect()->route('pages.index')->with('sucesso', 'Holiday successfully deleted!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}