<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherMortgageImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'other_image',
        'other_mortgage_id',
    ];
}
