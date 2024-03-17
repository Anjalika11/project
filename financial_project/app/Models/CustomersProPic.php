<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersProPic extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_proPic',
        'customer_id'
    ];

}
