<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectronicDevices extends Model
{
    use HasFactory;
    protected $fillable = [
        'devices_type',
        'devices_brand',
        'devices_model',
        'devices_market_price',
        'devices_suggested_price',
        'devices_more',
        'status',
        'customer_id',
        
    ];
}
