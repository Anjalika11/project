<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loanType extends Model
{
    protected $fillable = [
        'id',
        'loan_type',
        'customer_id',
        'loan_id',
    
    ];
    use HasFactory;
}




