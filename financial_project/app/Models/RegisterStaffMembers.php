<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterStaffMembers extends Model
{
    protected $fillable = [
        'id',
        'name',
        'address',
        'phone_number',
        'fix_phone_number',
        'email',
        'date_of_joining',
        'description',
        'job_role',
        'branch',
    ];
    use HasFactory;
}
