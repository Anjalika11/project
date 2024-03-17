<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobRole extends Model
{
    protected $fillable = [
        'id',
        'job_role',
        'job_description',
      
    ];
    use HasFactory;
  
}
