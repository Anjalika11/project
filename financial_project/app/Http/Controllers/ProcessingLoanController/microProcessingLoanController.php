<?php

namespace App\Http\Controllers\ProcessingLoanController;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\customers;
use App\Models\Loan;
use App\Models\loanType;
use App\Models\LoanPayment;
use App\Models\LoanPenalty;
use App\Models\PaymentHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class microProcessingLoanController extends Controller
{
    public function index()
    {
        return view('Section.ProcessingLoan.microProcessingLoan');
    }

    public function getOngoingLoan()
    {

        // $loanDetails = Loan::orderby('loans.loanID', 'asc')
        //     ->Join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
        //     ->Join('customers', 'loans.customer_id', '=', 'customers.id')
        //     ->select('loans.*','customers.nic','customers.fullname','loan_payments.due_amount', 'loan_payments.total_amount as totalAmount' , 'loan_payments.capital_amount')
        //     ->where('customers.loanType', "microloan")
        //     ->where('loans.loan_status', 1)
        //     ->get();
        // $loanDetails = Loan::orderBy('loans.loanID', 'asc')
        // ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
        // ->join('customers', 'loans.customer_id', '=', 'customers.id')
        // ->leftJoin('loan_interest_payments', 'loans.id', '=', 'loan_interest_payments.loan_id')
        // ->leftJoin('loan_penalties', 'loans.id', '=', 'loan_penalties.loan_id')
        // ->leftJoin('payment_histories', 'loans.id', '=', 'payment_histories.loan_id')
        // ->selectRaw('loans.*, loan_payments.pay_amount,loan_penalties.interest as penaltyInterest, customers.id as customerId, customers.fullname, loan_payments.due_amount, loan_payments.total_amount as totalAmount, loan_payments.capital_amount, loan_interest_payments.interest_amount, SUM(CASE WHEN payment_histories.category_of_payment = "Interest amount only" THEN payment_histories.payment ELSE 0 END) as sum_interest_amount, SUM(CASE WHEN payment_histories.category_of_payment != "Capital amount only" THEN payment_histories.payment ELSE 0 END) as sum_pay_amount, MAX(loans.requested_amount) as requested_amount' )
        // ->where('customers.loanType', 'microloan')
        // ->where('loans.loan_status', 1)
        // ->groupBy('loans.loanID','penaltyInterest','loans.created_at','updated_at','loans.installment_amount','loan_complete_time','loan_complete_date','loans.loan_status','loans.customer_id','loans.comments','loans.promissory_note','loans.penalty_status','loans.start_date','loans.end_date','loans.installments_count','loans.payment_method','loans.interest_schema','loans.fixedInterest','loans.interest_rate','loans.duration_time','loans.loan_type','loans.Previousoutstandingloans','loans.maximum_amount','loans.total_amount','requested_amount', 'loans.CustomLoanId', 'loans.id', 'customers.id', 'customers.fullname', 'loan_payments.due_amount','loan_payments.pay_amount', 'loan_payments.total_amount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
        // ->get();

        // $loanDetails = Loan::orderBy('loans.loanID', 'asc')
        // ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
        // ->join('customers', 'loans.customer_id', '=', 'customers.id')
        // ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        // ->leftJoin('loan_interest_payments', 'loans.id', '=', 'loan_interest_payments.loan_id')
        // ->leftJoin('loan_penalties', 'loans.id', '=', 'loan_penalties.loan_id')
        // ->leftJoin('payment_histories', 'loans.id', '=', 'payment_histories.loan_id')
        // ->selectRaw('loans.*, loan_payments.pay_amount,loan_penalties.interest as penaltyInterest, customers.id as customerId, customers.fullname, loan_payments.due_amount, loan_payments.total_amount as totalAmount, loan_payments.capital_amount, loan_interest_payments.interest_amount, SUM(CASE WHEN payment_histories.category_of_payment = "Interest amount only" THEN payment_histories.payment ELSE 0 END) as sum_interest_amount, SUM(CASE WHEN payment_histories.category_of_payment != "Capital amount only" THEN payment_histories.payment ELSE 0 END) as sum_pay_amount, MAX(loans.requested_amount) as requested_amount' )
        // ->where('loan_types.loan_type', 'microloan')
        // ->where('loans.loan_status', 1)
        // ->groupBy('loans.loanID','penaltyInterest','loans.created_at','updated_at','loans.installment_amount','loan_complete_time','loan_complete_date','loans.loan_status','loans.customer_id','loans.comments','loans.promissory_note','loans.penalty_status','loans.start_date','loans.end_date','loans.installments_count','loans.payment_method','loans.interest_schema','loans.fixedInterest','loans.interest_rate','loans.duration_time','loans.loan_type','loans.Previousoutstandingloans','loans.maximum_amount','loans.total_amount','requested_amount', 'loans.CustomLoanId', 'loans.id', 'customers.id', 'customers.fullname', 'loan_payments.due_amount','loan_payments.pay_amount', 'loan_payments.total_amount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
        // ->get();

        // $loanDetails = Loan::orderBy('loans.loanID', 'asc')
        // ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
        // ->join('customers', 'loans.customer_id', '=', 'customers.id')
        // ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        // ->leftJoin('loan_interest_payments', 'loans.id', '=', 'loan_interest_payments.loan_id')
        // ->leftJoin('payment_histories', 'loans.id', '=', 'payment_histories.loan_id')
        // ->select('loans.*', 'loan_payments.pay_amount', 'customers.id as customerId', 'customers.fullname', 'loan_payments.due_amount', 'loan_payments.total_amount as totalAmount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
        // ->addSelect(DB::raw('(SELECT SUM(payment) FROM payment_histories WHERE loan_id = loans.id AND category_of_payment = "Interest amount only") as sum_interest_amount'))
        // ->addSelect(DB::raw('(SELECT SUM(payment) FROM payment_histories WHERE loan_id = loans.id AND category_of_payment != "Capital amount only") as sum_pay_amount'))
        // ->addSelect(DB::raw('(SELECT MAX(requested_amount) FROM loans) as requested_amount'))
        // ->where('loan_types.loan_type', 'microloan')
        // ->where('loans.loan_status', 1)
        // ->groupBy('loans.loanID', 'loans.ad_previes_outstand', 'loans.created_at', 'updated_at', 'loan_payments.pay_amount', 'loans.installment_amount', 'loan_complete_time', 'loan_complete_date', 'loans.loan_status', 'loans.customer_id', 'loans.comments', 'loans.promissory_note', 'loans.penalty_status', 'loans.start_date', 'loans.end_date', 'loans.installments_count', 'loans.payment_method', 'loans.interest_schema', 'loans.fixedInterest', 'loans.interest_rate', 'loans.duration_time', 'loans.loan_type', 'loans.Previousoutstandingloans', 'loans.maximum_amount', 'loans.total_amount', 'requested_amount', 'loans.CustomLoanId', 'loans.id', 'customers.id', 'customers.fullname', 'loan_payments.due_amount', 'loan_payments.total_amount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
        // ->get();

        // // Fetch all records
        // $response['data'] = $loanDetails;
        // return response()->json($response);
        $branch_id = Session('branch_id');

        $loanDetails ='';
        if(Session('role')=='admin'){
        
            $loanDetails = Loan::orderBy('loans.loanID', 'asc')
            ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
            ->join('customers', 'loans.customer_id', '=', 'customers.id')
            ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
            ->leftJoin('loan_interest_payments', 'loans.id', '=', 'loan_interest_payments.loan_id')
            ->leftJoin('payment_histories', 'loans.id', '=', 'payment_histories.loan_id')
            ->select('loans.*', 'loan_payments.pay_amount', 'customers.id as customerId', 'customers.fullname', 'loan_payments.due_amount', 'loan_payments.total_amount as totalAmount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
            ->addSelect(DB::raw('(SELECT SUM(payment) FROM payment_histories WHERE loan_id = loans.id AND category_of_payment = "Interest amount only") as sum_interest_amount'))
            ->addSelect(DB::raw('(SELECT SUM(payment) FROM payment_histories WHERE loan_id = loans.id AND category_of_payment != "Capital amount only") as sum_pay_amount'))
            ->addSelect(DB::raw('(SELECT MAX(requested_amount) FROM loans) as requested_amount'))
            ->where('loan_types.loan_type', 'microloan')
            ->where('loans.loan_status', 1)
            ->groupBy('loans.loanID', 'loans.ad_previes_outstand', 'loans.created_at', 'updated_at', 'loan_payments.pay_amount', 'loans.installment_amount', 'loan_complete_time', 'loan_complete_date', 'loans.loan_status', 'loans.customer_id', 'loans.comments', 'loans.promissory_note', 'loans.penalty_status', 'loans.start_date', 'loans.end_date', 'loans.installments_count', 'loans.payment_method', 'loans.interest_schema', 'loans.fixedInterest', 'loans.interest_rate', 'loans.duration_time', 'loans.loan_type', 'loans.Previousoutstandingloans', 'loans.maximum_amount', 'loans.total_amount', 'requested_amount', 'loans.CustomLoanId', 'loans.id', 'customers.id', 'customers.fullname', 'loan_payments.due_amount', 'loan_payments.total_amount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
            ->get();
        }
        else{
            $loanDetails = Loan::orderBy('loans.loanID', 'asc')
            ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
            ->join('customers', 'loans.customer_id', '=', 'customers.id')
            ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
            ->leftJoin('loan_interest_payments', 'loans.id', '=', 'loan_interest_payments.loan_id')
            ->leftJoin('payment_histories', 'loans.id', '=', 'payment_histories.loan_id')
            ->select('loans.*', 'loan_payments.pay_amount', 'customers.id as customerId', 'customers.fullname', 'loan_payments.due_amount', 'loan_payments.total_amount as totalAmount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
            ->addSelect(DB::raw('(SELECT SUM(payment) FROM payment_histories WHERE loan_id = loans.id AND category_of_payment = "Interest amount only") as sum_interest_amount'))
            ->addSelect(DB::raw('(SELECT SUM(payment) FROM payment_histories WHERE loan_id = loans.id AND category_of_payment != "Capital amount only") as sum_pay_amount'))
            ->addSelect(DB::raw('(SELECT MAX(requested_amount) FROM loans) as requested_amount'))
            ->where('loan_types.loan_type', 'microloan')
            ->where('loans.loan_status', 1)
            ->where('customers.branch_id', $branch_id)
            ->groupBy('loans.loanID', 'loans.ad_previes_outstand', 'loans.created_at', 'updated_at', 'loan_payments.pay_amount', 'loans.installment_amount', 'loan_complete_time', 'loan_complete_date', 'loans.loan_status', 'loans.customer_id', 'loans.comments', 'loans.promissory_note', 'loans.penalty_status', 'loans.start_date', 'loans.end_date', 'loans.installments_count', 'loans.payment_method', 'loans.interest_schema', 'loans.fixedInterest', 'loans.interest_rate', 'loans.duration_time', 'loans.loan_type', 'loans.Previousoutstandingloans', 'loans.maximum_amount', 'loans.total_amount', 'requested_amount', 'loans.CustomLoanId', 'loans.id', 'customers.id', 'customers.fullname', 'loan_payments.due_amount', 'loan_payments.total_amount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
            ->get();

        }


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

    public function getCompletedMicroLoan()
    {
        $branch_id = Session('branch_id');
        $loanDetails = '';
        if(Session('role')=='admin'){
            $loanDetails = Loan::orderby('loans.loanID', 'asc')
            ->Join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
            ->Join('customers', 'loans.customer_id', '=', 'customers.id')
            ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
            ->select('loans.*','customers.nic','customers.fullname','loan_payments.due_amount', 'loan_payments.total_amount as totalAmount','loan_payments.pay_amount' , 'loan_payments.capital_amount')
            ->where('loan_types.loan_type', "microloan")
            ->where('loans.loan_status', 2)
            ->get();
        }else{

            $loanDetails = Loan::orderby('loans.loanID', 'asc')
            ->Join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
            ->Join('customers', 'loans.customer_id', '=', 'customers.id')
            ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
            ->select('loans.*','customers.nic','customers.fullname','loan_payments.due_amount', 'loan_payments.total_amount as totalAmount','loan_payments.pay_amount' , 'loan_payments.capital_amount')
            ->where('loan_types.loan_type', "microloan")
            ->where('loans.loan_status', 2)
            ->where('customers.branch_id', $branch_id)
            ->get();
        }
    // Fetch all records
    $response['data'] = $loanDetails;
    return response()->json($response);

        // Fetch all records
        // $response['data'] = $loanDetails;
        // return response()->json($response);
    }

    
    public function getOverdueMicroLoan(){
        $currentDate = Carbon::now()->toDateString();

        $branch_id = Session('branch_id');
        $loanDetails = '';
        if(Session('role')=='admin'){

            $loanDetails = Loan::orderBy('loans.loanID', 'asc')
            ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
            ->join('customers', 'loans.customer_id', '=', 'customers.id')
            ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
            ->leftJoin('loan_interest_payments', 'loans.id', '=', 'loan_interest_payments.loan_id')
            ->leftJoin('payment_histories', 'loans.id', '=', 'payment_histories.loan_id')
            ->selectRaw('loans.*, customers.id as customerId, loan_payments.pay_amount, customers.fullname, loan_payments.due_amount, loan_payments.total_amount as totalAmount, loan_payments.capital_amount, loan_interest_payments.interest_amount, SUM(CASE WHEN payment_histories.category_of_payment = "Interest amount only" THEN payment_histories.payment ELSE 0 END) as sum_interest_amount, SUM(CASE WHEN payment_histories.category_of_payment != "Capital amount only" THEN payment_histories.payment ELSE 0 END) as sum_pay_amount, MAX(loans.requested_amount) as requested_amount')
            ->where('loans.end_date', '<', $currentDate )
            ->where('loan_types.loan_type', "microloan")
            ->where('loans.loan_status', 1)
            ->where(function ($query) {
            $query->where('loans.penalty_status', 1)
                ->orWhere('loans.penalty_status', 0);
            })
            ->groupBy('loans.loanID','loans.ad_previes_outstand','loans.created_at','updated_at','loans.installment_amount','loan_complete_time','loan_complete_date','loan_payments.pay_amount','loans.loan_status','loans.customer_id','loans.comments','loans.promissory_note','loans.penalty_status','loans.start_date','loans.end_date','loans.installments_count','loans.payment_method','loans.interest_schema','loans.fixedInterest','loans.interest_rate','loans.duration_time','loans.loan_type','loans.Previousoutstandingloans','loans.maximum_amount','loans.total_amount','requested_amount', 'loans.CustomLoanId', 'loans.id', 'customers.id', 'customers.fullname', 'loan_payments.due_amount', 'loan_payments.total_amount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
            ->get();
        }else{
            $loanDetails = Loan::orderBy('loans.loanID', 'asc')
            ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
            ->join('customers', 'loans.customer_id', '=', 'customers.id')
            ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
            ->leftJoin('loan_interest_payments', 'loans.id', '=', 'loan_interest_payments.loan_id')
            ->leftJoin('payment_histories', 'loans.id', '=', 'payment_histories.loan_id')
            ->selectRaw('loans.*, customers.id as customerId, loan_payments.pay_amount, customers.fullname, loan_payments.due_amount, loan_payments.total_amount as totalAmount, loan_payments.capital_amount, loan_interest_payments.interest_amount, SUM(CASE WHEN payment_histories.category_of_payment = "Interest amount only" THEN payment_histories.payment ELSE 0 END) as sum_interest_amount, SUM(CASE WHEN payment_histories.category_of_payment != "Capital amount only" THEN payment_histories.payment ELSE 0 END) as sum_pay_amount, MAX(loans.requested_amount) as requested_amount')
            ->where('loans.end_date', '<', $currentDate )
            ->where('loan_types.loan_type', "microloan")
            ->where('loans.loan_status', 1)
            ->where('customers.branch_id', $branch_id)
            ->where(function ($query) {
            $query->where('loans.penalty_status', 1)
                ->orWhere('loans.penalty_status', 0);
            })
            ->groupBy('loans.loanID','loans.ad_previes_outstand','loans.created_at','updated_at','loans.installment_amount','loan_complete_time','loan_complete_date','loan_payments.pay_amount','loans.loan_status','loans.customer_id','loans.comments','loans.promissory_note','loans.penalty_status','loans.start_date','loans.end_date','loans.installments_count','loans.payment_method','loans.interest_schema','loans.fixedInterest','loans.interest_rate','loans.duration_time','loans.loan_type','loans.Previousoutstandingloans','loans.maximum_amount','loans.total_amount','requested_amount', 'loans.CustomLoanId', 'loans.id', 'customers.id', 'customers.fullname', 'loan_payments.due_amount', 'loan_payments.total_amount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
            ->get();

        }
        // $loanDetails = Loan::orderBy('loans.loanID', 'asc')
        // ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
        // ->join('customers', 'loans.customer_id', '=', 'customers.id')
        // ->select('loans.*', 'customers.nic', 'customers.fullname', 'loan_payments.due_amount', 'loan_payments.total_amount as totalAmount', 'loan_payments.capital_amount')
        // ->where('loans.end_date', '<', $currentDate )
        // ->where('loans.loan_status', 1)
        // ->where(function ($query) {
        // $query->where('loans.penalty_status', 1)
        //     ->orWhere('loans.penalty_status', 0);
        // })->get();

        $response['data'] = $loanDetails;
        return response()->json($response);
    }
    
}
