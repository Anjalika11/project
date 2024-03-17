<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = [
        'loanID',
        'CustomLoanId',
        'requested_amount',
        'maximum_amount',
        'total_amount',
        'Previousoutstandingloans',
        'ad_previes_outstand',
        'installment_amount',
        'payment_method',
        'loan_type',
        'duration_time',
        'interest_rate',
        'fixedInterest',
        'interest_schema',
        'installments_count',
        'start_date',
        'end_date',
        'penalty_status',
        'promissory_note',
        'comments',
        'customer_id',
        'loan_status',
        'loan_complete_date',
        'loan_complete_time'
    ];
}
