<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanInterestPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'interest_amount',
        'loan_id'
    ];
}
