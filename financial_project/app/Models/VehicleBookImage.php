<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleBookImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehicle_book_image',
        'vehicle_mortgage_id',
    ];
}
