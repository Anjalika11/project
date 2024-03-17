<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterStaffMembersProfileImg extends Model
{
    protected $fillable = [
        'id',
        'staff_profile_img',
        'staff_id',
    ];
    use HasFactory;
}
