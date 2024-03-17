<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staffSalary extends Model
{
    protected $fillable = [
        'amount',
        'date',
        'staff_id',
      
    ];
    use HasFactory;
}
