<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class totalProfitandLostController extends Controller
{
    public function index()
    {
        return view('Section.Report.totalProfit&lost');
    }
}
