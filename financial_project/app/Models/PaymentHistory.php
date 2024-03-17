<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'total_amount',
        'payment',
        'payment_date',
        'payment_time',
        'type_of_payment',
        'category_of_payment',
        'loan_id'
    ];
}
