<?php

namespace App\Http\Controllers\other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class goldpricecontroller extends Controller
{
    public function index()
    {
        return view('Section.OtherPages.goldprice');
    }
}
