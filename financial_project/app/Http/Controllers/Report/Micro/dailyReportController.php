<?php

namespace App\Http\Controllers\Report\Micro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customers;
use App\Models\Loan;
use App\Models\LoanPayment;
use App\Models\LoanPenalty;
use App\Models\PaymentHistory;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class dailyReportController extends Controller
{
    public function index()
    {
        $loanDetails = PaymentHistory::join('loans', 'loans.id', '=', 'payment_histories.loan_id')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        ->where('loan_types.loan_type', 'microloan')
        ->select(
            'loans.id as loan_id',
            DB::raw('COUNT(loans.id) as active_loan_count'),
            DB::raw('SUM(payment_histories.payment) as total_payment')
        )
        ->groupBy('loans.id');
    
    $loanDetails = $loanDetails->get();
    
    // Now perform a separate query for total_issued
    $totalIssued = DB::table('loans')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        ->where('loan_types.loan_type', 'microloan')
        ->select(DB::raw('SUM(loans.maximum_amount) as total_issued'))
        ->groupBy('loans.id')
        ->get();
    
    // Assuming $totalIssued is an array with a single element
    if (count($totalIssued) > 0) {
        $totalIssuedValue = $totalIssued[0]->total_issued;
    } else {
        $totalIssuedValue = 0;
    }
    
    // Now add the total_issued value to each row in $loanDetails
    $loanDetails = $loanDetails->map(function ($row) use ($totalIssuedValue) {
        $row->total_issued = $totalIssuedValue;
        return $row;
    });
    
    $activeLoanCount = $loanDetails->count();
    
    return view('Section.Report.Micro.dailyReports', compact('loanDetails', 'activeLoanCount'));
    
    }

    public function getMicroLoanDailyCollectReport()
    {
        $loanDetails = PaymentHistory::join('loans', 'loans.id', '=', 'payment_histories.loan_id')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        ->select('payment_histories.payment_date', DB::raw('CAST(SUM(payment_histories.payment) AS SIGNED) as paymentSum'), DB::raw('CAST(SUM(CASE WHEN payment_histories.category_of_payment = "Interest amount only" THEN payment_histories.payment ELSE 0 END)AS SIGNED) as interestSum'))
        // ->addSelect(DB::raw('(SELECT SUM(installment_amount) FROM loans AS l JOIN customers AS c ON l.customer_id = c.id WHERE loan_status = 1 AND c.loanType != "mortgageloan"  OR (loan_status = 2 AND loan_complete_date > payment_date)) AS totalInstallmentAmount'))
        ->addSelect(DB::raw('CAST((SELECT SUM(installment_amount) FROM loans AS l JOIN customers AS c ON l.customer_id = c.id WHERE loan_status = 1 AND c.loanType != "mortgageloan" OR (loan_status = 2 AND loan_complete_date > payment_date)) AS SIGNED) AS totalInstallmentAmount'))
        ->whereRaw('loan_types.loan_type <> "mortgageloan"')
        ->whereRaw('loans.payment_method = "Daily"')
        ->groupBy('payment_histories.payment_date')
        ->get();
    
        foreach ($loanDetails as $loan) {
            $loan->difference =   $loan->paymentSum - $loan->totalInstallmentAmount;
        }
    
    $response['data'] = $loanDetails;
    return response()->json($response);

}
public function getMicroLoanDailyReport()
{
    $loanDetails = PaymentHistory::join('loans', 'loans.id', '=', 'payment_histories.loan_id')
    ->join('customers', 'loans.customer_id', '=', 'customers.id')
    ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
    ->select(
        'payment_histories.payment_date',
        DB::raw('CAST(SUM(payment_histories.payment) AS SIGNED) as paymentSum'),
        DB::raw('CAST(SUM(CASE WHEN payment_histories.category_of_payment = "Interest amount only" THEN payment_histories.payment ELSE 0 END) AS SIGNED) as interestSum'
    ))
    ->whereRaw('loan_types.loan_type <> "mortgageloan"')
    ->groupBy('payment_histories.payment_date')
    ->get();


$response['data'] = $loanDetails;
return response()->json($response);

}
public function getDailyReportPaidCustomer(Request $request)
{
    $date = $request->input('date');

     $loanDetails = PaymentHistory::join('loans', 'loans.id', '=', 'payment_histories.loan_id')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        ->where('loan_types.loan_type', '=', 'microloan')
        ->where('payment_histories.payment_date', $date)
        ->select('payment_histories.*', 'loans.id', 'loans.CustomLoanId', 'customers.fullname', 'customers.nic')
        ->get();
    return response()->json(['data' => $loanDetails]);


}

public function getDailyCollectionReportPaidCustomer(Request $request)
{
    $date = $request->input('date');

    $loanDetails = PaymentHistory::join('loans', 'loans.id', '=', 'payment_histories.loan_id')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->where('payment_histories.payment_date', $date)
        ->where('loans.payment_method', '=', 'Daily')  // Corrected this line
        ->select('payment_histories.*', 'loans.id', 'loans.CustomLoanId', 'customers.fullname', 'customers.nic')
        ->get();

    return response()->json(['data' => $loanDetails]);
}


public function getallmicroLoanDetails(Request $request)
{

$loanDetails = Loan::orderBy('loans.loanID', 'asc')
        ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
        ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->leftJoin('loan_interest_payments', 'loans.id', '=', 'loan_interest_payments.loan_id')
        ->leftJoin('loan_penalties', 'loans.id', '=', 'loan_penalties.loan_id')
        ->leftJoin('payment_histories', 'loans.id', '=', 'payment_histories.loan_id')
        ->selectRaw('loans.*, loan_payments.pay_amount,loan_penalties.interest as penaltyInterest, customers.id as customerId, customers.fullname, loan_payments.due_amount, loan_payments.total_amount as totalAmount, loan_payments.capital_amount, loan_interest_payments.interest_amount, SUM(CASE WHEN payment_histories.category_of_payment = "Interest amount only" THEN payment_histories.payment ELSE 0 END) as sum_interest_amount, SUM(CASE WHEN payment_histories.category_of_payment != "Capital amount only" THEN payment_histories.payment ELSE 0 END) as sum_pay_amount, MAX(loans.requested_amount) as requested_amount' )
        ->where('loan_types.loan_type', 'microloan')
        ->groupBy('loans.loanID','penaltyInterest','loans.created_at','updated_at','loans.installment_amount','loan_complete_time','loan_complete_date','loans.loan_status','loans.customer_id','loans.comments','loans.promissory_note','loans.penalty_status','loans.start_date','loans.end_date','loans.installments_count','loans.payment_method','loans.interest_schema','loans.fixedInterest','loans.interest_rate','loans.duration_time','loans.loan_type','loans.Previousoutstandingloans','loans.maximum_amount','loans.total_amount','requested_amount', 'loans.CustomLoanId', 'loans.id', 'customers.id', 'customers.fullname', 'loan_payments.due_amount','loan_payments.pay_amount', 'loan_payments.total_amount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
        ->get();


        // Fetch all records
        $response['data'] = $loanDetails;
        return response()->json($response);

        

}
}
