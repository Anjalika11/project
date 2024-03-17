<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoldItems extends Model
{
    use HasFactory;
    protected $fillable = [
        'gold_type',
        'Other_gold_item',
        'gold_pound',
        'weight',
        'gold_market_price',
        'gold_suggested_price',
        'gold_more',
        'status',
        'customer_id',
        'loan_id'
      
    ];
}
