<?php

namespace App\Http\Controllers\Report\Micro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profitReportController extends Controller
{
    public function index()
    {
        return view('Section.Report.Micro.profitReports');
    }
}
