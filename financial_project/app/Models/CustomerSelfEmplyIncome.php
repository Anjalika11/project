<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSelfEmplyIncome extends Model
{
    use HasFactory;
    protected $fillable = [
        'typeofIncome',
        'selfEmployinfo',
        'customer_id'
    ];

}
