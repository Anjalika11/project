<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'capital_amount',
        'total_amount',
        'due_amount',
        'pay_amount',
        'start_date',
        'end_date',
        'loan_id'
    ];
}
