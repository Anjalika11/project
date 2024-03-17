<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleMortgage extends Model
{
    use HasFactory;
    protected $fillable = [
        'auto_vehicle_category',
        'auto_vehicle_brand',
        'auto_vehicle_model',
        'auto_vehicle_year',
        'auto_vehicle_mileage',
        'auto_vehicle_engine_capacity',
        'auto_vehicle_market_price',
        'auto_vehicle_suggested_price',
        'auto_vehicle_engine_number',
        'auto_vehicle_more',
        'status',
        'customer_id',
       
    ];
}
