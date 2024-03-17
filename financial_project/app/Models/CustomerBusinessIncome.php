<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerBusinessIncome extends Model
{
    use HasFactory;
    protected $fillable = [
        'typeofBusiness',
        'businessName',
        'bussinessAddress',
        'bussinessMoreInfo',
        'customer_id'
    ];
}
