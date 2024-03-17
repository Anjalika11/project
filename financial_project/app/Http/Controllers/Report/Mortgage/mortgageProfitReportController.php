<?php

namespace App\Http\Controllers\Report\Mortgage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customers;
use App\Models\Loan;
use App\Models\LoanPayment;
use App\Models\LoanPenalty;
use App\Models\PaymentHistory;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class mortgageProfitReportController extends Controller
{
    public function index()
    {
        return view('Section.Report.Mortgage.profitReports');
    }

    public function getallMortgageLoanDetails(Request $request)
{

$loanDetails = Loan::orderBy('loans.loanID', 'asc')
        ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->leftJoin('loan_interest_payments', 'loans.id', '=', 'loan_interest_payments.loan_id')
        ->leftJoin('loan_penalties', 'loans.id', '=', 'loan_penalties.loan_id')
        ->leftJoin('payment_histories', 'loans.id', '=', 'payment_histories.loan_id')
        ->selectRaw('loans.*, loan_payments.pay_amount,loan_penalties.interest as penaltyInterest, customers.id as customerId, customers.fullname, loan_payments.due_amount, loan_payments.total_amount as totalAmount, loan_payments.capital_amount, loan_interest_payments.interest_amount, SUM(CASE WHEN payment_histories.category_of_payment = "Interest amount only" THEN payment_histories.payment ELSE 0 END) as sum_interest_amount, SUM(CASE WHEN payment_histories.category_of_payment != "Capital amount only" THEN payment_histories.payment ELSE 0 END) as sum_pay_amount, MAX(loans.requested_amount) as requested_amount' )
        ->where('customers.loanType', 'mortgageloan')
        ->groupBy('loans.loanID','penaltyInterest','loans.created_at','updated_at','loans.installment_amount','loan_complete_time','loan_complete_date','loans.loan_status','loans.customer_id','loans.comments','loans.promissory_note','loans.penalty_status','loans.start_date','loans.end_date','loans.installments_count','loans.payment_method','loans.interest_schema','loans.fixedInterest','loans.interest_rate','loans.duration_time','loans.loan_type','loans.Previousoutstandingloans','loans.maximum_amount','loans.total_amount','requested_amount', 'loans.CustomLoanId', 'loans.id', 'customers.id', 'customers.fullname', 'loan_payments.due_amount','loan_payments.pay_amount', 'loan_payments.total_amount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
        ->get();


        // Fetch all records
        $response['data'] = $loanDetails;
        return response()->json($response);

        

}
}
