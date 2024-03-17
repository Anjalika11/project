<?php

namespace App\Http\Controllers\ProcessingLoanController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class otherProcessingLoanController extends Controller
{
    public function index()
    {
        return view('Section.ProcessingLoan.otherProcessingLoan');
    }
}
