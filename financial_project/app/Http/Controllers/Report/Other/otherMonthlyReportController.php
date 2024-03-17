<?php

namespace App\Http\Controllers\Report\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class otherMonthlyReportController extends Controller
{
    public function index()
    {
        return view('Section.Report.Other.monthlyReports');
    }
}
