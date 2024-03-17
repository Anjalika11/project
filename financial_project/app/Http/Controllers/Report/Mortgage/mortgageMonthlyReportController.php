<?php

namespace App\Http\Controllers\Report\Mortgage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customers;
use App\Models\Loan;
use App\Models\LoanPayment;
use App\Models\LoanPenalty;
use App\Models\PaymentHistory;
use App\Models\loanType;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class mortgageMonthlyReportController extends Controller
{
    public function index()
    {
        return view('Section.Report.Mortgage.monthlyReports');
    }


    public function getMortgageMonthlyReprt()
    {

    //     $loanIssues = DB::table('loans')
    //     ->join('customers', 'loans.customer_id', '=', 'customers.id')
    //     ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
    //     ->select(
    //         DB::raw('YEAR(loans.start_date) AS year'),
    //         DB::raw('MONTH(loans.start_date) AS month'),
    //         DB::raw('SUM(loans.maximum_amount) AS total_issue'),
    //         'loans.id'
    //     )
    //     ->where('loan_types.loan_type', 'mortgageloan')
    //     ->groupBy('year', 'month', 'loans.id');
    
    // $loanCollections = DB::table('payment_histories')
    //     ->join('loans', 'payment_histories.loan_id', '=', 'loans.id')
    //     ->join('customers', 'loans.customer_id', '=', 'customers.id')
    //     ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
    //     ->select(
    //         DB::raw('YEAR(payment_histories.payment_date) AS year'),
    //         DB::raw('MONTH(payment_histories.payment_date) AS month'),
    //         DB::raw('SUM(payment_histories.payment) AS total_collect'),
    //         DB::raw('SUM(CASE WHEN payment_histories.category_of_payment = "Capital amount only" THEN payment_histories.payment ELSE 0 END) AS total_collect_capital'),
    //         DB::raw('SUM(CASE WHEN payment_histories.category_of_payment = "Interest amount only" THEN payment_histories.payment ELSE 0 END) AS total_collect_interest'),
    //         'loans.id'
    //     )
    //     ->where('loan_types.loan_type', 'mortgageloan')
    //     ->groupBy('year', 'month', 'loans.id');
    
    // $monthlyReport = DB::table(DB::raw("({$loanIssues->toSql()}) as l"))
    //     ->mergeBindings($loanIssues)
    //     ->leftJoinSub($loanCollections, 'p', function ($join) {
    //         $join->on('l.year', '=', 'p.year')
    //             ->on('l.month', '=', 'p.month')
    //             ->on('l.id', '=', 'p.id');
    //     })
    //     ->select(
    //         DB::raw('CONCAT(l.year, "-", LPAD(l.month, 2, "0")) AS year'),
    //         DB::raw('COALESCE(l.total_issue, 0) AS total_issue'),
    //         DB::raw('COALESCE(p.total_collect, 0) AS total_collect'),
    //         DB::raw('COALESCE(p.total_collect_capital, 0) AS total_collect_capital'),
    //         DB::raw('COALESCE(p.total_collect_interest, 0) AS total_collect_interest')
    //     )
    //     ->get();
     
    
    // $response['data'] = $monthlyReport;
    // return response()->json($response);




        $loanIssues = DB::table('loans')->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        ->select(DB::raw('YEAR(start_date) AS year, MONTH(start_date) AS month, SUM(maximum_amount) AS total_issue'))
        ->where('loan_types.loan_type', 'mortgageloan')
        ->groupBy(DB::raw('YEAR(start_date), MONTH(start_date)'));


        $loanCollections = DB::table('payment_histories')
        ->join('loans', 'payment_histories.loan_id', '=', 'loans.id')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        ->select(DB::raw('YEAR(payment_date) AS year, MONTH(payment_date) AS month,  SUM(payment) AS total_collect,
            SUM(CASE WHEN category_of_payment = "Capital amount only" THEN payment ELSE 0 END) AS total_collect_capital,
            SUM(CASE WHEN category_of_payment = "Interest amount only" THEN payment ELSE 0 END) AS total_collect_interest'))
            ->where('loan_types.loan_type', 'mortgageloan')
        ->groupBy(DB::raw('YEAR(payment_date), MONTH(payment_date)'));

    $monthlyReport = DB::table(DB::raw("({$loanIssues->toSql()}) as l"))
        ->rightJoinSub($loanCollections, 'p', function ($join) {
            $join->on('l.year', '=', 'p.year')
                 ->on('l.month', '=', 'p.month');
        })


        
        ->mergeBindings($loanIssues)
        ->select(DB::raw('CONCAT(p.year, "-", LPAD(p.month, 2, "0")) AS year, COALESCE(l.total_issue, 0) AS total_issue, p.total_collect,p.total_collect_capital, p.total_collect_interest'))
        // ->where('customers.loanType', '!=', 'microloan')
        ->get();

    $response['data'] = $monthlyReport;
    return response()->json($response);
    }

    public function getTotalMortgageMonthlyReportbyCase(Request $request)
    {
    $date = $request->input('date');
    $yearMonth = date('Y.m', strtotime($date)); // Extract year and month from the provided date

    $loanDetails = PaymentHistory::join('loans', 'loans.id', '=', 'payment_histories.loan_id')
    ->join('customers', 'loans.customer_id', '=', 'customers.id')
    ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
    ->whereRaw("DATE_FORMAT(payment_histories.payment_date, '%Y.%m') = ?", [$yearMonth])
    ->where('loan_types.loan_type', 'mortgageloan')
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

    
    public function getIssuedMortgageCapitalByMonthly(Request $request)
    {
        $date = $request->input('date');
        $yearMonth = date('Y.m', strtotime($date));

        $loanDetails = Loan::join('customers', 'loans.customer_id', '=', 'customers.id')
        ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        ->whereRaw("DATE_FORMAT(start_date, '%Y.%m') = ?", [$yearMonth])
        ->select('loans.*','customers.fullname')
        ->where('loan_types.loan_type', 'mortgageloan')
        ->get();

        return response()->json(['data' => $loanDetails]);
    }

}
