<?php

namespace App\Repositories;

use App\Models\HolidayPlan;

class HolidayPlanRepository {
    private $model;

    public function __construct(HolidayPlan $holidayPlanRepository) {
        $this->model = $holidayPlanRepository;
    }

    public function allHolidays() {
        return $this->model->newQuery()->get();
    }
}