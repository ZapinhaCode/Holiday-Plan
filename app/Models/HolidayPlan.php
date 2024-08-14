<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class HolidayPlan extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
        'participants',
    ];

    protected $casts = [
        'date' => 'date:Y-m-d',
        'participants' => 'array',
    ];
}
