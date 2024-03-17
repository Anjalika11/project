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

class monthlyReportController extends Controller
{
    public function index()
    {
        return view('Section.Report.Micro.monthlyReports');
    }

    public function getallmicroLoanMonthlyReport()
    {
        $loanIssues = DB::table('loans')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        ->select(DB::raw('YEAR(start_date) AS year, MONTH(start_date) AS month, SUM(maximum_amount) AS total_issue'))
        // ->where('customers.loanType', '=', 'microloan')
        ->where('loan_types.loan_type', 'microloan')
        ->groupBy(DB::raw('YEAR(start_date), MONTH(start_date)'));

    $loanCollections = DB::table('payment_histories')
        ->join('loans', 'payment_histories.loan_id', '=', 'loans.id')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        ->select(DB::raw('YEAR(payment_date) AS year, MONTH(payment_date) AS month,  SUM(payment) AS total_collect,
            SUM(CASE WHEN category_of_payment = "Capital amount only" THEN payment ELSE 0 END) AS total_collect_capital,
            SUM(CASE WHEN category_of_payment = "Interest amount only" THEN payment ELSE 0 END) AS total_collect_interest'))
        // ->where('customers.loanType', '=', 'microloan')
        ->where('loan_types.loan_type', 'microloan')
        ->groupBy(DB::raw('YEAR(payment_date), MONTH(payment_date)'));

    $monthlyReport = DB::table(DB::raw("({$loanIssues->toSql()}) as l"))
        ->rightJoinSub($loanCollections, 'p', function ($join) {
            $join->on('l.year', '=', 'p.year')
                 ->on('l.month', '=', 'p.month');
        })
        ->mergeBindings($loanIssues)
        ->select(DB::raw('CONCAT(p.year, "-", LPAD(p.month, 2, "0")) AS year, COALESCE(l.total_issue, 0) AS total_issue, p.total_collect,p.total_collect_capital, p.total_collect_interest'))
        ->get();

    $response['data'] = $monthlyReport;
    return response()->json($response);
    }

    public function getTotalMicroMonthlyReportbyCase(Request $request)
    {
    $date = $request->input('date');
    $yearMonth = date('Y.m', strtotime($date)); // Extract year and month from the provided date

    $loanDetails = PaymentHistory::join('loans', 'loans.id', '=', 'payment_histories.loan_id')
    ->join('customers', 'loans.customer_id', '=', 'customers.id')
    ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
    ->whereRaw("DATE_FORMAT(payment_histories.payment_date, '%Y.%m') = ?", [$yearMonth])
    // ->where('customers.loanType', '=', 'microloan')
    ->where('loan_types.loan_type', 'microloan')
    ->groupBy('payment_histories.loan_id','loans.CustomLoanId')
    ->select(
        'loans.CustomLoanId',
        'payment_histories.loan_id',
        DB::raw('MAX(customers.fullname) as fullname'),
        DB::raw('SUM(payment_histories.payment) as sum_payment'),
        DB::raw('SUM(CASE WHEN payment_histories.category_of_payment = "Interest amount only" THEN payment_histories.payment ELSE 0 END) as total_interest_amount'),
        DB::raw('SUM(CASE WHEN payment_histories.category_of_payment = "Capital amount only" THEN payment_histories.payment ELSE 0 END) as total_Capital_amount')
    )
    ->get();

        return response()->json(['data' => $loanDetails]);


    }

    public function getIssuedCapitalByMonthly(Request $request)
    {
        $date = $request->input('date');
        $yearMonth = date('Y.m', strtotime($date));

        $loanDetails = Loan::join('customers', 'loans.customer_id', '=', 'customers.id')->whereRaw("DATE_FORMAT(start_date, '%Y.%m') = ?", [$yearMonth])
        ->select('loans.*','customers.fullname')
        ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        // ->where('customers.loanType', '!=', 'mortgageloan')
        ->where('loan_types.loan_type', 'microloan')
        ->get();

        return response()->json(['data' => $loanDetails]);
    }
}
