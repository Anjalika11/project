<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\LoanPayment;
use App\Models\LoanPenalty;
use App\Models\PaymentHistory;
use App\Models\LoanInterestPayment;

class paymentHistoryController extends Controller
{
    public function index(Request $request)
    {   
        $id = $request->input('id');
  
        
        $loanDetails = PaymentHistory::join('loans', 'loans.id', '=', 'payment_histories.loan_id')
        ->select('payment_histories.*', 'loans.end_date','loans.end_date' ,'loans.CustomLoanId')
        ->where('payment_histories.loan_id', $id )
        ->where('payment_histories.payment','!=', 0)
        ->orderBy('payment_histories.payment_date', 'asc')
        ->get();


    
            $response['data'] = $loanDetails;
        return view('Section.paymentHistory.paymenthistory', compact('loanDetails','id'));

    }

    public function loanDetail($id)
    {

        $loanDetails = Loan::orderBy('loans.loanID', 'asc')
        ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->leftJoin('loan_interest_payments', 'loans.id', '=', 'loan_interest_payments.loan_id')
        ->leftJoin('payment_histories', 'loans.id', '=', 'payment_histories.loan_id')
        ->leftJoin('loan_penalties', 'loans.id', '=', 'loan_penalties.loan_id')
        ->selectRaw('loans.*, loan_payments.pay_amount,loan_penalties.interest as penaltyInterest, customers.id as customerId, customers.fullname, loan_payments.due_amount, loan_payments.total_amount as totalAmount, loan_payments.capital_amount, loan_interest_payments.interest_amount, SUM(CASE WHEN payment_histories.category_of_payment = "Interest amount only" THEN payment_histories.payment ELSE 0 END) as sum_interest_amount, SUM(CASE WHEN payment_histories.category_of_payment != "Capital amount only" THEN payment_histories.payment ELSE 0 END) as sum_pay_amount, MAX(loans.requested_amount) as requested_amount')
        ->where('loans.id', $id)

        
        ->groupBy('loans.loanID','loans.ad_previes_outstand','loans.created_at','penaltyInterest','updated_at','loans.installment_amount','loan_complete_time','loan_complete_date','loans.loan_status','loans.customer_id','loans.comments','loans.promissory_note','loans.penalty_status','loans.start_date','loans.end_date','loans.installments_count','loans.payment_method','loans.interest_schema','loans.fixedInterest','loans.interest_rate','loans.duration_time','loans.loan_type','loans.Previousoutstandingloans','loans.maximum_amount','loans.total_amount','requested_amount', 'loans.CustomLoanId', 'loans.id', 'customers.id', 'customers.fullname', 'loan_payments.due_amount','loan_payments.pay_amount', 'loan_payments.total_amount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
        ->get();


        if (is_null($loanDetails)) {
            return response()->json(['error' => 'Record not found.'], 404);
        }

        $response['data'] = $loanDetails;
        return response()->json($response);
    }


    public function deletepayment(Request $request)
    {   
        $paymentHistoryId = $request->input('paymentHistoryId');

    $loanPaymentHistory = PaymentHistory::select('payment', 'loan_id', 'category_of_payment')->where('id', $paymentHistoryId)->first();
    $categoryOfPayment = $loanPaymentHistory->category_of_payment;
    $loanPayment = $loanPaymentHistory->payment;
    $loanId = $loanPaymentHistory->loan_id;
    $loanDetails = LoanPayment::select('due_amount', 'capital_amount','pay_amount')->where('loan_id', $loanId)->first();

    $DueAmount = $loanDetails->due_amount;
    $capitalAmount = $loanDetails->capital_amount;
    $pay_amount= $loanDetails->pay_amount;
    $UpdatedAmount = $DueAmount + $loanPayment;
    $UpdatedCapital = $capitalAmount + $loanPayment;
    $UpdatedPayAmount = $pay_amount - $loanPayment;
    $upadateLoanDetails = LoanPayment::where('loan_id', $loanId)->update([
        'due_amount' => $UpdatedAmount,
        'pay_amount' => $UpdatedPayAmount
    ]);

    

    if ($upadateLoanDetails) {
        $paymentHistoryDelete = PaymentHistory::find($paymentHistoryId);
        $paymentHistoryDelete->delete();
        $response['data'] = 'Successfully Deleted';

        // Check the payment category and update capital amount accordingly
        if ($categoryOfPayment == 'Capital amount only') {
            LoanPayment::where('loan_id', $loanId)->update(['capital_amount' => $UpdatedCapital]);
        }

        return response()->json($response);
    }

    $response['data'] = "Error";
    return response()->json($response);
    
    }
}
