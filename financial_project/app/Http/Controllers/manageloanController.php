<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManageLoan;
class manageloanController extends Controller
{
    public function index()
    {
        return view('manageLoan');
    }

    public function storeLoan(Request $request)
    {
        try {
            $loan = new ManageLoan;
            $loan->loan_name = $request->input('LoanName');
            $loan->total_payment = $request->input('totalpayment');
            $loan->message = $request->input('message');
            $loan->time_input = $request->input('timeInput');
            $loan->interest_percentage = $request->input('interestpresentage');
            $loan->amount = $request->input('Amount');
            $loan->interest_schema = $request->input('InterestSchema');
            $loan->save();

            return response()->json([
                'success' => true,
                'message' => 'Loan created successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while creating the loan',
                'error' => $e->getMessage()
            ]);
        }
    }

    public function loanType()
    {
        $createLoan = ManageLoan::all();
        return response()->json($createLoan);
        
    }

    public function loanTypedetails(Request $request)
    {
        $loanID = $request->input('loanID');
        $LoanDetails =  ManageLoan::where('id', $loanID)->first();
        return response()->json($LoanDetails);
    }
    
}
