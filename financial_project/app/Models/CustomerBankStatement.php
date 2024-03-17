<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerBankStatement extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_bank_statement',
        'customer_id'
    ];
}
