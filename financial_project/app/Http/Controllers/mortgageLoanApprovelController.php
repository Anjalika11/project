<?php

namespace App\Http\Controllers;
use App\Models\customers;
use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\LoanPayment;
use App\Models\LoanPenalty;
use App\Models\PaymentHistory;
use Illuminate\Support\Facades\Session;
class mortgageLoanApprovelController extends Controller
{
    public function index()
    {
        return view('Section.LoanApprovel.mortgageLoanApprovel');
    }

    
    public function getMortgageVerifiedCostomerDetails()
    {
        $loanType = 'mortgageloan';
        // $loanDetails = customers::orderby('id', 'asc')->select('*')->where('customers.loanType', $loanType)->where('customers.loanStatus', 1)->get();
        // Fetch all records
        $branch_id = Session('branch_id');
     
        $loanDetails = '';
        if(Session('role')=='admin'){
            $loanDetails = customers::orderby('id', 'asc')->select('*')->where('customers.loanType', $loanType)->where('customers.loanStatus', 1)->get();
  
        }else{
            $loanDetails = customers::orderby('id', 'asc')->select('*')->where('customers.loanType', $loanType)->where('customers.loanStatus', 1)->where('customers.branch_id', $branch_id)->get();
       
        }
        $response['data'] = $loanDetails;
        return response()->json($response);
    }

    public function setupLoanForm($id)
    {
        $CustomerDetails = customers::where('id', $id)->first();

        $LoanDetails = Loan::leftJoin('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
            // ->select('loan_payments.due_amount')
            ->select('loans.start_date','loans.Previousoutstandingloans','loans.loan_complete_date','loan_payments.due_amount','loans.interest_schema','loans.maximum_amount','loans.interest_rate','loan_payments.pay_amount')
            ->where('loans.customer_id', $id)
            ->latest('loans.created_at')
            ->first();

        $LoanId = Loan::select('loans.CustomLoanId')->latest('loans.created_at')->first(); 

        if (is_null($CustomerDetails)) {
            return response()->json(['error' => 'Record not found.'], 404);
        } else if (is_null($LoanDetails)) {
            $response['data'] = [$CustomerDetails, $LoanId ];
            return response()->json($response);
        }else if (is_null($LoanDetails) && is_null($LoanId)) {
            $response['data'] = [$CustomerDetails ];
            return response()->json($response);
        }



        $response['data'] = [$CustomerDetails, $LoanDetails ,$LoanId ];
        return response()->json($response);

        
        // $response['data'] = [$CustomerDetails ];
        // return response()->json($response);
    }

}
