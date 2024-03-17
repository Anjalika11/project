<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPaySlip extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_pay_slip',
        'job_id'
    ];
}
