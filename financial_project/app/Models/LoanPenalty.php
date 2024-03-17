<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanPenalty extends Model
{
    use HasFactory;
    protected $fillable = [
        'penalty_method',
        'penalty_rate',
        'interest',
        'total_amount',
        'due_amount',
        'start_date',
        'end_date',
        'loan_id'
       
    ];

}
