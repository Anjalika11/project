<?php

namespace App\Http\Controllers\Report\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class otherDailyReportController extends Controller
{
    public function index()
    {
        return view('Section.Report.Other.dailyReports');
    }
}
