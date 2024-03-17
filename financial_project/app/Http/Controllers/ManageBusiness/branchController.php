<?php

namespace App\Http\Controllers\ManageBusiness;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Loan;
// use Illuminate\Support\Facades\Validator;
use App\Models\branches;
use App\Models\loanType;
use App\Models\LoanPayment;
use App\Models\LoanPenalty;
use App\Models\PaymentHistory;
use App\Models\RegisterStaffMembers;
use App\Models\RegisterStaffMembersCvImg;
use App\Models\RegisterStaffMembersProfileImg;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class branchController extends Controller
{
    
    public function branchBeforeUserRegistration()
    {
        return view('auth.branchRegistrationBefore');
    }


    
    public function store(Request $request)
    {
       
        $request->validate([
            'BranchId' => 'required|string|max:10|unique:branches,brach_id',
            'BranchName' => 'required|string|max:300|unique:branches,branch_name',
            'email'=> 'required|email|max:300',
            'city' => 'required|string|max:300',
            'address' => 'required|string|max:450',
            'ContactNumber' => 'required|string|size:10',
        ]);
        branches::create([
            'brach_id' => $request->input('BranchId'),
            'branch_name' => $request->input('BranchName'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'contact_number' => $request->input('ContactNumber'),
            'email' => $request->input('email'),
            'description' => $request->input('description'),
            'location' => $request->input('location'),
        ]);

        if (session()->has('user_id')) {
            return redirect()->back();
        } else {
            return redirect()->route('register');
        }
       
        // If the validation passes, you can store the data in the database or perform other actions here.
    }

    
    public function index()
    {
        return view('Section.BusinessManage.branch');
    }

    public function getBranches()
    {
        $branches = branches::get();

        $response['data'] = $branches;
        return response()->json($response);
    }
    
    public function branchProfile(Request $request)
    {
        $currentDate = Carbon::now()->toDateString();
        $id = $request->input('id');
        $branchId = $id;

        $ongoingLoanCount = Loan::join('customers', 'loans.customer_id', '=', 'customers.id')
        ->where('loans.loan_status', 1)->where('customers.branch_id', $branchId)->count();
        

        $completedLoanCount = Loan::join('customers', 'loans.customer_id', '=', 'customers.id')
        ->where('customers.branch_id', $branchId)->where('loans.loan_status', 2)->count();

        $overdueLoanCount = Loan::join('customers', 'loans.customer_id', '=', 'customers.id')
        ->where('customers.branch_id', $branchId)->where('loans.loan_status', 1)
        ->where('loans.end_date', '<', $currentDate )->count();
        
        
        $branch = branches::where('id', $id)->first();
    
        return view('Section.BusinessManage.branchManage', compact('branch','ongoingLoanCount','completedLoanCount','overdueLoanCount'));
    }


    
    public function updateBranchDetails(Request $request)
    {
        $data = $request->all();
      
    
        $request->validate([
            'branchId' => 'required|string|max:10',
            'branch_Name' => 'required|string|max:300',
            'email'=> 'required|email|max:300',
            'city' => 'required|string|max:300',
            'address' => 'required|string|max:450',
            'phone' => 'required|string|size:10',
        ]);


        $dataIdValue = $request->input('dataIdValue');
        $updateData = [
            'brach_id' => $data['branchId'],
            'branch_name' => $data['branch_Name'],
            'city' => $data['city'],
            'address' => $data['address'],
            'contact_number' => $data['phone'],
            'email' => $data['email'],
            'description' => $data['description']
          
        ];
        
        
        branches::where('id', $dataIdValue)->update($updateData);
      
        return response()->json([
            'status' => 'success',
            'message' => 'success'
        ]);

 
    
    }
    public function getmicroLoanByBranch($id){
        
        $loanDetails = Loan::orderBy('loans.loanID', 'asc')
        ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        ->leftJoin('loan_interest_payments', 'loans.id', '=', 'loan_interest_payments.loan_id')
        ->leftJoin('loan_penalties', 'loans.id', '=', 'loan_penalties.loan_id')
        ->leftJoin('payment_histories', 'loans.id', '=', 'payment_histories.loan_id')
        ->selectRaw('loans.*, loan_payments.pay_amount,loan_penalties.interest as penaltyInterest, customers.id as customerId, customers.fullname, loan_payments.due_amount, loan_payments.total_amount as totalAmount, loan_payments.capital_amount, loan_interest_payments.interest_amount, SUM(CASE WHEN payment_histories.category_of_payment = "Interest amount only" THEN payment_histories.payment ELSE 0 END) as sum_interest_amount, SUM(CASE WHEN payment_histories.category_of_payment != "Capital amount only" THEN payment_histories.payment ELSE 0 END) as sum_pay_amount, MAX(loans.requested_amount) as requested_amount' )
        ->where('loan_types.loan_type', 'microloan')
        ->where('customers.branch_id', $id)
        ->groupBy('loans.loanID','penaltyInterest','loans.ad_previes_outstand','loans.created_at','updated_at','loans.installment_amount','loan_complete_time','loan_complete_date','loans.loan_status','loans.customer_id','loans.comments','loans.promissory_note','loans.penalty_status','loans.start_date','loans.end_date','loans.installments_count','loans.payment_method','loans.interest_schema','loans.fixedInterest','loans.interest_rate','loans.duration_time','loans.loan_type','loans.Previousoutstandingloans','loans.maximum_amount','loans.total_amount','requested_amount', 'loans.CustomLoanId', 'loans.id', 'customers.id', 'customers.fullname', 'loan_payments.due_amount','loan_payments.pay_amount', 'loan_payments.total_amount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
        ->get();

        // Fetch all records
        $response['data'] = $loanDetails;
        return response()->json($response);
    }


       public function getMortgageLoanByBranch($id){
        
        $loanDetails = Loan::orderBy('loans.loanID', 'asc')
        ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->join('loan_types', 'loans.id', '=', 'loan_types.loan_id')
        ->leftJoin('loan_interest_payments', 'loans.id', '=', 'loan_interest_payments.loan_id')
        ->leftJoin('loan_penalties', 'loans.id', '=', 'loan_penalties.loan_id')
        ->leftJoin('payment_histories', 'loans.id', '=', 'payment_histories.loan_id')
        ->selectRaw('loans.*, loan_payments.pay_amount,loan_penalties.interest as penaltyInterest, customers.id as customerId, customers.fullname, loan_payments.due_amount, loan_payments.total_amount as totalAmount, loan_payments.capital_amount, loan_interest_payments.interest_amount, SUM(CASE WHEN payment_histories.category_of_payment = "Interest amount only" THEN payment_histories.payment ELSE 0 END) as sum_interest_amount, SUM(CASE WHEN payment_histories.category_of_payment != "Capital amount only" THEN payment_histories.payment ELSE 0 END) as sum_pay_amount, MAX(loans.requested_amount) as requested_amount' )
        ->where('loan_types.loan_type', 'mortgageloan')
        ->where('customers.branch_id', $id)
        ->groupBy('loans.loanID','penaltyInterest','loans.ad_previes_outstand','loans.created_at','updated_at','loans.installment_amount','loan_complete_time','loan_complete_date','loans.loan_status','loans.customer_id','loans.comments','loans.promissory_note','loans.penalty_status','loans.start_date','loans.end_date','loans.installments_count','loans.payment_method','loans.interest_schema','loans.fixedInterest','loans.interest_rate','loans.duration_time','loans.loan_type','loans.Previousoutstandingloans','loans.maximum_amount','loans.total_amount','requested_amount', 'loans.CustomLoanId', 'loans.id', 'customers.id', 'customers.fullname', 'loan_payments.due_amount','loan_payments.pay_amount', 'loan_payments.total_amount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
        ->get();

        // Fetch all records
        $response['data'] = $loanDetails;
        return response()->json($response);
    }
    

    public function getMortgageMonthlyReprtbybranch($id){
        $loanIssues = DB::table('loans')->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->select(DB::raw('YEAR(start_date) AS year, MONTH(start_date) AS month, SUM(maximum_amount) AS total_issue'))
        ->where('customers.branch_id', $id)
        ->groupBy(DB::raw('YEAR(start_date), MONTH(start_date)'));


        $loanCollections = DB::table('payment_histories')
        ->join('loans', 'payment_histories.loan_id', '=', 'loans.id')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->select(DB::raw('YEAR(payment_date) AS year, MONTH(payment_date) AS month,  SUM(payment) AS total_collect,
            SUM(CASE WHEN category_of_payment = "Capital amount only" THEN payment ELSE 0 END) AS total_collect_capital,
            SUM(CASE WHEN category_of_payment = "Interest amount only" THEN payment ELSE 0 END) AS total_collect_interest'))
            ->where('customers.branch_id', $id)
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

    
    public function getpaiedAmountMonthlybybranch(Request $request)
    {
    $date = $request->input('date');
    $Id = $request->input('branch_Id');
    $yearMonth = date('Y.m', strtotime($date)); // Extract year and month from the provided date
 

    $loanDetails = PaymentHistory::join('loans', 'loans.id', '=', 'payment_histories.loan_id')
    ->join('customers', 'loans.customer_id', '=', 'customers.id')
    ->whereRaw("DATE_FORMAT(payment_histories.payment_date, '%Y.%m') = ?", [$yearMonth])
    ->where('customers.branch_id', $Id)
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

    
    public function getissuedAmountMonthlybybranch(Request $request)
    {
        $date = $request->input('date');
        $Id = $request->input('branch_Id');
        $yearMonth = date('Y.m', strtotime($date));

        $loanDetails = Loan::join('customers', 'loans.customer_id', '=', 'customers.id')
        ->whereRaw("DATE_FORMAT(start_date, '%Y.%m') = ?", [$yearMonth])
        ->where('customers.branch_id', $Id)
        ->select('loans.*','customers.fullname')
        ->get();

        return response()->json(['data' => $loanDetails]);
    }


    
    public function getStaffListbybranch($id)
    {
    
        $RegisterStaffMembers = RegisterStaffMembers::select('register_staff_members.*', 'branches.branch_name' , 'branches.id as branchId', 'job_roles.job_role', 'job_roles.id as jobRoleId')
        ->leftJoin('branches','register_staff_members.branch','=','branches.id')
        ->leftJoin('job_roles','register_staff_members.job_role','=','job_roles.id')
        ->where('branch',$id)
        ->get();

        // Loop through the results and format the created_at column as a date
        foreach ($RegisterStaffMembers as $propic) {
            $propicImages = RegisterStaffMembersProfileImg::where('staff_id', $propic->id)->get();
            $propic->proImages = $propicImages;
        }
        foreach ($RegisterStaffMembers as $cv) {
            $StaffCvPdf = RegisterStaffMembersCvImg::where('staff_id', $cv->id)->get();
            $cv->CvPdf = $StaffCvPdf;
        }

        
        $response['data'] = $RegisterStaffMembers;
        return response()->json($response);
       
    }
    
}
    