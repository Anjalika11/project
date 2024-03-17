<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class otherLoanApprovelController extends Controller
{
    public function index()
    {
        return view('Section.LoanApprovel.otherLoanApprovel');
    }
}
