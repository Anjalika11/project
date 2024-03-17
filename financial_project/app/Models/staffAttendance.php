<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staffAttendance extends Model
{
    protected $fillable = [
        'arrival',
        'departure',
        'date',
        'attend',
        'staff_id',
      
    ];
    use HasFactory;
}
 