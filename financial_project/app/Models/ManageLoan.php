<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageLoan extends Model
{
    protected $fillable = [
        'id',
        'loan_name',
        'total_payment',
        'message',
        'time_input',
        'interest_percentage',
        'amount',
        'interest_schema',
    ];
    use HasFactory;
}
