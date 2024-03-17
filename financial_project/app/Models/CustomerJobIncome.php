<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerJobIncome extends Model
{
    use HasFactory;
    protected $fillable = [
        'jobrole',
        'companyName',
        'companyAddress',
        'jobContactNumber',
        'customer_id'
    ];
}
