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

class mortgageDailyReportController extends Controller
{
    public function index()
    {
        $loanDetails = PaymentHistory::join('loans', 'loans.id', '=', 'payment_histories.loan_id')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        ->where('loan_types.loan_type', '<>', 'microloan')
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
        ->where('loan_types.loan_type', '<>', 'microloan')
        ->select(DB::raw('SUM(loans.maximum_amount) as total_issued'))
        ->groupBy('loans.id')
        ->get();
    
    // Assuming $totalIssued is an array with a single element
    // if (count($totalIssued) > 0) {
    //     $totalIssuedValue = $totalIssued[0]->total_issued;
    // } else {
    //     $totalIssuedValue = 0;
    // }
    
    // // Now add the total_issued value to each row in $loanDetails
    // $loanDetails = $loanDetails->map(function ($row) use ($totalIssuedValue) {
    //     $row->total_issued = $totalIssuedValue;
    //     return $row;
    // });
    
    $activeLoanCount = $loanDetails->count();
    
    return view('Section.Report.Mortgage.dailyReports', compact('totalIssued', 'activeLoanCount','loanDetails'));
        // return view('');
    }

    public function getMortgageLoanDailyReport()
{
    $loanDetails = PaymentHistory::join('loans', 'loans.id', '=', 'payment_histories.loan_id')
    ->join('customers', 'loans.customer_id', '=', 'customers.id')
    ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
    ->select(
        'payment_histories.payment_date',
        DB::raw('CAST(SUM(payment_histories.payment) AS SIGNED) as paymentSum'),
        DB::raw('CAST(SUM(CASE WHEN payment_histories.category_of_payment = "Interest amount only" THEN payment_histories.payment ELSE 0 END) AS SIGNED) as interestSum'
    ))
    ->whereRaw('loan_types.loan_type = "mortgageloan"')  // Provide a specific condition for loanType
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
        ->where('loan_types.loan_type', '<>', 'microloan')
        ->where('payment_histories.payment_date', $date)
        ->select('payment_histories.*', 'loans.id', 'loans.CustomLoanId', 'customers.fullname', 'customers.nic')
        ->get();
    return response()->json(['data' => $loanDetails]);


}
}
