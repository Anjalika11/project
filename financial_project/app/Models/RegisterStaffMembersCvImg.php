<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterStaffMembersCvImg extends Model
{
    protected $fillable = [
        'id',
        'staff_cv_pdf',
        'staff_id',
    ];
    use HasFactory;
}
