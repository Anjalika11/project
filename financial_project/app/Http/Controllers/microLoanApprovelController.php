<?php

namespace App\Http\Controllers;
use App\Models\customers;
use Illuminate\Http\Request;

class microLoanApprovelController extends Controller
{
    public function index()
    {
        return view('Section.LoanApprovel.microLoanApprovel');
    }

    
    public function getMicroVerifiedCostomerDetails()
    {
        $loanType = 'microloan';
        $loanDetails = customers::orderby('id', 'asc')->select('*')->where('customers.loanType', $loanType)->where('customers.loanStatus', 1)->get();
        // Fetch all records
        $response['data'] = $loanDetails;
        return response()->json($response);
    }
}
