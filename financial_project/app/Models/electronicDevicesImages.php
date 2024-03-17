<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class electronicDevicesImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'devices_image',
        'devices_mortgage_id',
    ];
}
