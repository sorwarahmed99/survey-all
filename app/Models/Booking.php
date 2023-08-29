<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'area_or_postcode',
        'name',
        'slug',
        'email',
        'phone',
        'instruction',
        
        'job_type',
        
        'survey_type',
        'other_service',

        'valuation_reason',

        'specific_reason_for_valuation_reason_help_to_buy',
        'specific_reason_for_valuation_reason_shared_ownership',

        'valuation_other_reason',
        'valuation_for_lending_purpose',
    ];
}
