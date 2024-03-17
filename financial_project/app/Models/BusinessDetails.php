<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'business_name',
        'address',
        'phone_number',
        'register_number',
        'email',
        'date_of_start',
        'description'
    ];
}


