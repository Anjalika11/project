<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customers;
use App\Models\Loan;
use App\Models\LoanPayment;
use App\Models\LoanPenalty;
use App\Models\branches;
use App\Models\PaymentHistory;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class branchReportController extends Controller
{
    public function index()
    {
        return view('Section.Report.branchReport');
    }


   
    public function getBranchReprt()
    {
        $details = DB::table('branches')
        ->select(
            'branches.branch_name',
            DB::raw('(SELECT SUM(loans.maximum_amount) FROM loans WHERE loans.customer_id IN (SELECT id FROM customers WHERE customers.branch_id = branches.id)) AS total_issue'),
            DB::raw('(SELECT SUM(payment_histories.payment) FROM payment_histories 
                      INNER JOIN loans ON payment_histories.loan_id = loans.id
                      INNER JOIN customers ON loans.customer_id = customers.id
                      WHERE customers.branch_id = branches.id) AS total_collect'),
            DB::raw('(SELECT SUM(payment_histories.payment) FROM payment_histories 
                      INNER JOIN loans ON payment_histories.loan_id = loans.id
                      INNER JOIN customers ON loans.customer_id = customers.id
                      WHERE customers.branch_id = branches.id AND payment_histories.category_of_payment = "Interest amount only") AS total_collect_interest'),
            DB::raw('(SELECT SUM(payment_histories.payment) FROM payment_histories 
                      INNER JOIN loans ON payment_histories.loan_id = loans.id
                      INNER JOIN customers ON loans.customer_id = customers.id
                      WHERE customers.branch_id = branches.id AND payment_histories.category_of_payment = "Capital amount only") AS total_collect_capital')
        )
        ->get();
    

    
        $response['data'] = $details;
    return response()->json($response);
    }
}
