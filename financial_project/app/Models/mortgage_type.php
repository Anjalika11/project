<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mortgage_type extends Model
{
    use HasFactory;
    protected $fillable = [
        'costomer_id',
        'mortgage_type',
        'loan_id'
    ];
}
