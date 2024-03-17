<?php

namespace App\Http\Controllers\Report\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class otherProfitReportController extends Controller
{
    public function index()
    {
        return view('Section.Report.Other.profitReports');
    }
}
