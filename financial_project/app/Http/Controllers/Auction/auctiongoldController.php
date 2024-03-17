<?php

namespace App\Http\Controllers\Auction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customers;
use App\Models\Loan;
use App\Models\LoanPayment;
use App\Models\LoanPenalty;
use App\Models\PaymentHistory;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use App\Models\loanType;
use Illuminate\Support\Facades\Session;
class auctiongoldController extends Controller
{
    public function index()
    {
        return view('Section.AuctionItems.AuctionGold');
    }

    public function getAuctionGoldLoan(){

    $loanDetails = Loan::orderBy('loans.loanID', 'asc')
    ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
    ->join('gold_items', 'loans.id', '=', 'gold_items.loan_id')
    ->join('customers', 'loans.customer_id', '=', 'customers.id')
    ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
    ->join('mortgage_types', 'loans.id', '=', 'mortgage_types.loan_id')
    ->leftJoin('loan_interest_payments', 'loans.id', '=', 'loan_interest_payments.loan_id')
    ->leftJoin('payment_histories', 'loans.id', '=', 'payment_histories.loan_id')
    ->select('loans.*', 'gold_items.gold_type','gold_items.weight','loan_payments.pay_amount', 'customers.id as customerId', 'customers.fullname', 'loan_payments.due_amount', 'loan_payments.total_amount as totalAmount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
    ->addSelect(DB::raw('(SELECT SUM(payment) FROM payment_histories WHERE loan_id = loans.id AND category_of_payment = "Interest amount only") as sum_interest_amount'))
    ->addSelect(DB::raw('(SELECT SUM(payment) FROM payment_histories WHERE loan_id = loans.id AND category_of_payment != "Capital amount only") as sum_pay_amount'))
    ->addSelect(DB::raw('(SELECT MAX(requested_amount) FROM loans) as requested_amount'))
    ->where('loan_types.loan_type', 'mortgageloan')
    ->where('mortgage_types.mortgage_type', 'Gold items')
    ->where('gold_items.status', 'For auction')
    ->where('loans.loan_status', 1)
    ->groupBy('loans.loanID', 'loans.ad_previes_outstand', 'gold_items.gold_type','gold_items.weight', 'loans.created_at', 'updated_at', 'loan_payments.pay_amount', 'loans.installment_amount', 'loan_complete_time', 'loan_complete_date', 'loans.loan_status', 'loans.customer_id', 'loans.comments', 'loans.promissory_note', 'loans.penalty_status', 'loans.start_date', 'loans.end_date', 'loans.installments_count', 'loans.payment_method', 'loans.interest_schema', 'loans.fixedInterest', 'loans.interest_rate', 'loans.duration_time', 'loans.loan_type', 'loans.Previousoutstandingloans', 'loans.maximum_amount', 'loans.total_amount', 'requested_amount', 'loans.CustomLoanId', 'loans.id', 'customers.id', 'customers.fullname', 'loan_payments.due_amount', 'loan_payments.total_amount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
    ->get();

    foreach ($loanDetails as $loan) {
        $capital_date = PaymentHistory::where('loan_id', $loan->id)
            ->where('category_of_payment', 'Capital amount only')
            ->get();
    
        // Assuming you want to add 'capital_date' as a property to each $loan item
        $loan->capital_date = $capital_date;
    }


    // Fetch all records
    $response['data'] = $loanDetails;
    return response()->json($response);

}

public function getAuctionGoldCompleteLoan(){
    $loanDetails = Loan::orderBy('loans.loanID', 'asc')
    ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
    ->join('gold_items', 'loans.id', '=', 'gold_items.loan_id')
    ->join('customers', 'loans.customer_id', '=', 'customers.id')
    ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
    ->join('mortgage_types', 'loans.id', '=', 'mortgage_types.loan_id')
    ->leftJoin('loan_interest_payments', 'loans.id', '=', 'loan_interest_payments.loan_id')
    ->leftJoin('payment_histories', 'loans.id', '=', 'payment_histories.loan_id')
    ->select('loans.*', 'gold_items.gold_type','gold_items.weight','loan_payments.pay_amount', 'customers.id as customerId', 'customers.fullname', 'loan_payments.due_amount', 'loan_payments.total_amount as totalAmount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
    ->addSelect(DB::raw('(SELECT SUM(payment) FROM payment_histories WHERE loan_id = loans.id AND category_of_payment = "Interest amount only") as sum_interest_amount'))
    ->addSelect(DB::raw('(SELECT SUM(payment) FROM payment_histories WHERE loan_id = loans.id AND category_of_payment != "Capital amount only") as sum_pay_amount'))
    ->addSelect(DB::raw('(SELECT MAX(requested_amount) FROM loans) as requested_amount'))
    ->where('loan_types.loan_type', 'mortgageloan')
    ->where('mortgage_types.mortgage_type', 'Gold items')
    ->where('gold_items.status', 'For auction')
    ->where('loans.loan_status', 2)
    ->groupBy('loans.loanID', 'loans.ad_previes_outstand', 'gold_items.gold_type','gold_items.weight', 'loans.created_at', 'updated_at', 'loan_payments.pay_amount', 'loans.installment_amount', 'loan_complete_time', 'loan_complete_date', 'loans.loan_status', 'loans.customer_id', 'loans.comments', 'loans.promissory_note', 'loans.penalty_status', 'loans.start_date', 'loans.end_date', 'loans.installments_count', 'loans.payment_method', 'loans.interest_schema', 'loans.fixedInterest', 'loans.interest_rate', 'loans.duration_time', 'loans.loan_type', 'loans.Previousoutstandingloans', 'loans.maximum_amount', 'loans.total_amount', 'requested_amount', 'loans.CustomLoanId', 'loans.id', 'customers.id', 'customers.fullname', 'loan_payments.due_amount', 'loan_payments.total_amount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
    ->get();

    foreach ($loanDetails as $loan) {
        $capital_date = PaymentHistory::where('loan_id', $loan->id)
            ->where('category_of_payment', 'Capital amount only')
            ->get();
    
        // Assuming you want to add 'capital_date' as a property to each $loan item
        $loan->capital_date = $capital_date;
    }


    // Fetch all records
    $response['data'] = $loanDetails;
    return response()->json($response);
    
}
}
