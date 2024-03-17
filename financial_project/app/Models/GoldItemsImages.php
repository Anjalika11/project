<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoldItemsImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'gold_image',
        'gold_mortgage_id',
    ];
}
