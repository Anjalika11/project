<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class totalExpencesController extends Controller
{
    public function index()
    {
        return view('Section.Report.totalExpences');
    }
}
