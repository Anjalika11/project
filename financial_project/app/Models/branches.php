<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branches extends Model
{
    use HasFactory;
    protected $fillable = [
        'brach_id',
        'branch_name',
        'city',
        'address',
        'contact_number',
        'email',
        'description',
        'location'
    ];
}
