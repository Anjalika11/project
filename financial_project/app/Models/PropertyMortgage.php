<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyMortgage extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_type',
        'property_province',
        'property_district',
        'property_address',
        'property_state',
        'property_assessed_value',
        'property_suggested_value',
        'property_postal_code',
        'property_land_size',
        'property_size_sqft',
        'property_bed_rooms',
        'property_more',
        'status',
        'customer_id',
      
    ];
}
