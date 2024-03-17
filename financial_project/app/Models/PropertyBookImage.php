<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyBookImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_book_image',
        'property_mortgage_id',
    ];
}
