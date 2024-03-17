<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherMortgage extends Model
{
    use HasFactory;
    protected $fillable = [
        'other_title',
        'other_market_price',
        'other_suggested_price',
        'other_more',
        'status',
        'customer_id',
       
    ];
}
