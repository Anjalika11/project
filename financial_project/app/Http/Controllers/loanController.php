<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;
use App\Models\Loan;
use App\Models\loanType;
use App\Models\LoanPayment;
use App\Models\LoanPenalty;
use App\Models\PaymentHistory;
use App\Models\LoanInterestPayment;
use App\Models\GoldItems;
use App\Models\PropertyMortgage;

use App\Models\ElectronicDevices;
use App\Models\VehicleMortgage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use App\Models\mortgage_type;
class loanController extends Controller
{
    public function storeLoan(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'CustomLoanId' => [
                'required',
                Rule::unique('loans', 'CustomLoanId'),
            ],
            // ... (other validation rules)
        ]);
    
        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 400);
        }

        $data = $request->all();
        
        $customerID = $data['cusId'];
        $loanId = $data['LoanId'];
        $penaltyState = $data['penaltyState'];
        $promissory_note_name = ' ';
        // storing promissory_note
        if ($request->hasFile('promissory_note')) {
            $promissory_note = $request->file('promissory_note');
            $promissory_note_name = 'promissory-note-' . $loanId . '.' . $promissory_note->getClientOriginalExtension();
            $promissory_note->move('img/loans/promissory_note', $promissory_note_name);
        }
        // generating unique loanID
        function gen_loanID()
        {
            $loanID_count = Loan::all()->count();

            if ($loanID_count > 0) {
                $loanID = Loan::orderBy('loanID', 'desc')->first()->loanID;
                $number = $loanID;
                $number++;
                $id = str_pad($number, 4, '0', STR_PAD_LEFT);
                $id = $id;
            } else {
                $id = "0001";
            }
            return $id;
        }
        $loanID = gen_loanID();
        $loan_status = 1;

        // store data into loan table
        $loan = Loan::create([
            'loanID' => $loanID,
            'CustomLoanId' => $data['CustomLoanId'],
            
            'requested_amount' => $data['RequestedAmount'],
            'maximum_amount' => $data['MaximumAmount'],
            'total_amount' => $data['TotalAmount'],
            'Previousoutstandingloans' => ($data['Previousoutstandingloans'] === "NaN") ? 0 : $data['Previousoutstandingloans'],
            'ad_previes_outstand'=> $data['ad_previes_outstand'],
            'installment_amount' => $data['installmentPayment'],
            'payment_method' => $data['PaymentMethod'],
            'loan_type' => $data['LoanType'],
            'duration_time' => $data['DurationTime'],
            'interest_rate' => $data['interestPresentage'],
             $fixedInterest = (int)$data['fixedInterest'],
            'fixedInterest' => $fixedInterest ,
            'interest_schema' => $data['interestScema'],
            'installments_count' => $data['Numberofinstallments'],
            'start_date' => $data['StartDate'],
            'end_date' => $data['EndDate'],
            'penalty_status' => $data['penaltyState'],
            'promissory_note' => $promissory_note_name,
            'comments' => $data['comments'],
            'customer_id' => $customerID,
            'loan_status' => $loan_status
        ]);

        $customers_mortgage_sub_type = mortgage_type::where('costomer_id',$customerID)->whereNull('loan_id')->update(['loan_id' => $loan->id]);
       
        $loanType = loanType::create([ 
            'loan_id' =>$loan->id,
            'loan_type'=> $data['loan_type'],
            'customer_id' => $customerID
        ]);



        $customers_mortgage_sub_type = mortgage_type::where('costomer_id', $customerID)->latest()->first();
        if ($customers_mortgage_sub_type) {
            $mortgage_sub_type = $customers_mortgage_sub_type->mortgage_type;
           
            if( $mortgage_sub_type =='Gold items'){
                GoldItems::where('customer_id', $customerID)
                ->whereNull('loan_id')
                ->update(['loan_id' => $loan->id]);
                }
            if( $mortgage_sub_type =='Electronic Devices'){
                ElectronicDevices::where('customer_id', $customerID)
                ->whereNull('loan_id')
                ->update(['loan_id' => $loan->id]);
                }
            if( $mortgage_sub_type =='auto'){
                VehicleMortgage::where('customer_id', $customerID)
                ->whereNull('loan_id')
                ->update(['loan_id' => $loan->id]);
            }
            if( $mortgage_sub_type =='property'){
                PropertyMortgage::where('customer_id', $customerID)
                ->whereNull('loan_id')
                ->update(['loan_id' => $loan->id]);
            }
        }
        // $customers_mortgage_sub_type = mortgage_type::where('id',$customerID)->first();
        // $mortgage_sub_type = $customers_mortgage_sub_type->mortgage_sub_type;
        // if( $mortgage_sub_type ='Gold items'){
        //     GoldItems::where('customer_id', $customerID)
        //     ->whereNull('loan_id')
        //     ->update(['loan_id' => $loan->id]);
        // }
       
        
        

        // store data into LoanPenalty table
        if ($penaltyState == 1) {
            $penalty = LoanPenalty::create([
                'penalty_method' => $data['penaltyMethod'],
                'penalty_rate' => $data['penaltypresentage'],
                'interest'=> 0,
                'total_amount' => 0,
                'due_amount' => 0,
                'start_date' =>  null,
                'end_date' =>  null,
                'loan_id' => $loan->id
            ]);
        }

        // store data into LoanPayment table
        $loan_payment = LoanPayment::create([
            'capital_amount' => $data['MaximumAmount'],
            'total_amount' => $data['TotalAmount'],
            'due_amount' => $data['TotalAmount'],
            'pay_amount'=> 0,
            'start_date' => $data['StartDate'],
            'end_date' => $data['EndDate'],
            'loan_id' => $loan->id
        ]);

        // store data into PaymentHistory table
        $payment = 0;
        $payment_history = PaymentHistory::create([
            'total_amount' => $data['TotalAmount'],
            'payment' => $payment,
            'payment_date' => $data['StartDate'],
            'type_of_payment' => 'installment payments',
            'loan_id' => $loan->id
        ]);

        // update setup loan status on customer
        $loan_status = 3;
        $customer = customers::find($customerID);
        $customer->loanStatus = $loan_status;
        $customer->update();

        if ($loan && $loan_payment && $payment_history) {
            return response()->json(['success' => 'Loan Created Successfully!']);
        } else {
            return response()->json(['error' => 'Loan Creation Failed!']);
        }
    }


    public function loanDetail($id)
    {

        
        // $loanDetails = Loan::Join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
        // ->leftJoin('customers', 'loans.customer_id', '=', 'customers.id')
        // ->leftJoin('loan_penalties', 'loans.id', '=', 'loan_penalties.loan_id')
        //     ->select('loans.*','customers.nic','customers.fullname','loan_payments.due_amount','loan_penalties.penalty_method','loan_penalties.penalty_rate', 'loan_payments.capital_amount')->where('loans.id', $id)
        //     ->get();
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
        $latestLoanId = PaymentHistory::select('id')->latest('created_at')->first();

        if (is_null($loanDetails)) {
            return response()->json(['error' => 'Record not found.'], 404);
        }

        $response['data'] = $loanDetails;
        $response['latestLoanId'] = $latestLoanId;
        return response()->json($response);
    }

    public function storePayment(Request $request, $id){
        $data = $request->all();
        $loan_id = $data['Id'];
        $new_payment = $data['InstallmentAmount'];
// dd($data);

        if ($data['CategoryOfPayment']=="Capital amount only"){
            $loan_payment_table = LoanPayment::where('loan_id', $loan_id)->firstOrFail();
            $loan_total_amount = $loan_payment_table->capital_amount;
            $newCapital = $loan_total_amount-$new_payment;
    
            $loan_payment_table->capital_amount = $newCapital;
            $loan_payment_table->update();
        }

        if ($data['CategoryOfPayment'] == "Interest amount only") {
    // Check if a record with this loan_id exists in LoanInterestPayment
            $loanInterestPayment = LoanInterestPayment::where('loan_id', $loan_id)->first();
    // $loanInterestamount = $loanInterestPayment->interest_amount;
            if ($loanInterestPayment) {
        // Update the existing record
                 $loanInterestPayment->interest_amount += $new_payment;
                $loanInterestPayment->save();
            } else {
        // Create a new record
                LoanInterestPayment::create([
                    'interest_amount' => $new_payment,
                    'loan_id' => $loan_id,
            ]);
         }
        }

        $loan_payment = LoanPayment::where('loan_id', $loan_id)->firstOrFail();
        $due_amount = $loan_payment->due_amount;


        $new_due_amount = $due_amount - $new_payment;

        $loan_payment->due_amount = $new_due_amount;
        $loan_payment->pay_amount += $new_payment;
        $loan_payment->update();

        $penaltyStatus = Loan::select('penalty_status')->where('id', $loan_id)->first();
        $LoanpenaltyStatus = $penaltyStatus ? $penaltyStatus->penalty_status : 0;

        $total_amount = 0;
        $updated_due_amount = 0;
        $paymentType = ''; // Initialize $paymentType

        if ($LoanpenaltyStatus == 1 || $LoanpenaltyStatus == 0) {
            $paymentType = 'installment payments';
            $payment_history = PaymentHistory::where('loan_id', $loan_id)->first();
            $total_amount = $payment_history ? $payment_history->total_amount : 0;
        } elseif ($LoanpenaltyStatus == 2) {
            $paymentType = 'Penalty payments';
            $LoanPenalty = LoanPenalty::select('due_amount')->where('loan_id', $loan_id)->first();
             if ($LoanPenalty) {
                $LoanPenaltyDueAmount = $LoanPenalty->due_amount;
                $updated_due_amount = $LoanPenaltyDueAmount - $new_payment;
            }
        }
        $currentTime = Carbon::now('Asia/Colombo'); 
        $new_payment_record = PaymentHistory::create([
            'total_amount' => $total_amount,
            'payment' => $new_payment,
            'payment_date' => $data['PaymentDate'],
            'payment_time'=> $currentTime,
            'type_of_payment' => $paymentType,
            'category_of_payment' => $data['CategoryOfPayment'],
            'loan_id' => $loan_id
        ]);

        if ($LoanpenaltyStatus == 2) {
            LoanPenalty::where('loan_id', $loan_id)->update(['due_amount' => $updated_due_amount]);
        }

        return response()->json(['success' => 'Payment Recorded Successfully!']);

    // if ($new_payment_record) {
    //     return response()->json(['success' => 'Loan Created Successfully!']);
    // } else {
    //     return response()->json(['error' => 'Loan Creation Failed!']);
    // }
        }

    public function completLoan(Request $request){
        $LoanId = $request->input('LoanId');
        $customerloanStatus = 4;
        $loanStatus = 2;
        $currentDateTime = Carbon::now('Asia/Colombo'); 
        


        $loan = Loan::join('customers', 'loans.customer_id', '=', 'customers.id')
            ->where('loans.id', $LoanId)
            ->update([
                'customers.loanStatus' => $customerloanStatus,
                'loans.loan_status' => $loanStatus,
                'loans.loan_complete_date' => $currentDateTime->toDateString(), // Set the date
                'loans.loan_complete_time' => $currentDateTime->toTimeString(), // Set the time
            ]);

        if ($loan) {
            $response['message'] = 'Loan status updated successfully';
        } else {
            $response['message'] = 'Failed to update loan status';
        }
   
        return response()->json($response);
    }


    public function penaltyStore(Request $request)
    {
        $data = $request->all();
        $LoanIdNumber = $data['LoanId'];
        $DueAmount = $data['DueAmount'];
        $PenaltyPercentage = $data['PenaltyPercentage'];
        $penaltyMethod = $data['penaltyMethod'];
        $TotalAmount = $data['TotalAmount'];
        $interestAmount = $data['interestAmount'];
        $SartDate = $data['SartDate'];
        $EndDate = $data['EndDate'];
        $paymentMethod = $data['paymentMethod'];

        $UpadateLoanPenalty = LoanPenalty::where('loan_id', $LoanIdNumber)->update([
            'total_amount'=>$TotalAmount,
            'interest'=>$interestAmount,
            'due_amount' => $TotalAmount,
            'start_date'=> $SartDate,
            'end_date'=> $EndDate
     ]);

     if($UpadateLoanPenalty){
        Loan::where('id', $LoanIdNumber)->update(['penalty_status' => 2]);
        $UpadateloanPayments = LoanPayment::where('loan_id', $LoanIdNumber)->select(['total_amount', 'due_amount'])->first();
        $LoanPaymentTotalAmount = (intval($UpadateloanPayments->total_amount) + intval($interestAmount));
        $LoanPaymentDueAmount =  (intval($UpadateloanPayments->due_amount) + intval($interestAmount));
        LoanPayment::where('loan_id', $LoanIdNumber)->update(['total_amount' => $LoanPaymentTotalAmount,
        'due_amount' => $LoanPaymentDueAmount
        ]);
        $response['data'] = 'Successfuly Deleted';
        return response()->json($response);
    }
        
    }

    public function loaneStatus(Request $request)
    {
        $customerId = $request->input('cusId');

        $loanDetails = customers::select('loanStatus')->where('id', $customerId)->first();

        $response['data'] = $loanDetails->loanStatus;
        return response()->json($response);
    }


}
