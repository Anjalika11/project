<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Models\customers;
use App\Models\CustomerJobIncome;
use App\Models\CustomerBusinessIncome;
use App\Models\CustomerSelfEmplyIncome;
use App\Models\RegisterStaffMembers;
use App\Models\CustomerPaySlip;
use App\Models\customersNICS;
use App\Models\CustomerBankStatement;
use App\Models\CustomersProPic;
use App\Models\VehicleImage;
use App\Models\VehicleMortgage;
use App\Models\VehicleBookImage;

use App\Models\PropertyMortgage;
use App\Models\PropertyImage;
use App\Models\PropertyBookImage;

use App\Models\ElectronicDevices;
use App\Models\electronicDevicesImages;
use App\Models\GoldItems;
use App\Models\GoldItemsImages;
use App\Models\loanType;
use App\Models\OtherMortgage;
use App\Models\OtherMortgageImages;
use App\Models\Loan;
use App\Models\LoanPayment;
use App\Models\LoanPenalty;
use App\Models\PaymentHistory;
use Carbon\Carbon;
use App\Models\branches;
use App\Models\jobRole;
use Illuminate\Http\Request;

use App\Models\mortgage_type;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class allApplicantProfileController extends Controller
{
    // public function index(Request $request)
    // {   
    //     $id = $request->input('id');
        
    //     // Use the $id to fetch the corresponding staff profile
    // //   { // ...
    //     $staffmembers = RegisterStaffMembers::join('job_roles', 'register_staff_members.job_role', '=', 'job_roles.id')
    //     ->select('register_staff_members.*', 'job_roles.job_role')
    //     ->where('job_roles.job_role', 'Collector')
    //     ->get();
    
    //     $customers = customers::select('customers.*','branches.branch_name','mortgage_types.mortgage_type as customer_mortgage_type','customer_job_incomes.jobrole','customer_job_incomes.companyName','customer_job_incomes.companyAddress'
    //     ,'customer_job_incomes.jobContactNumber','customer_business_incomes.typeofBusiness','customer_business_incomes.businessName','customer_business_incomes.bussinessAddress'
    //     ,'customer_business_incomes.bussinessMoreInfo')
    //     ->leftJoin('customer_job_incomes', 'customers.id', '=', 'customer_job_incomes.customer_id')
    //     ->leftJoin('mortgage_types', 'customers.id', '=', 'mortgage_types.costomer_id')
    //     ->leftJoin('customer_self_emply_incomes', 'customers.id', '=', 'customer_self_emply_incomes.customer_id')
    //     ->leftJoin('customer_business_incomes', 'customers.id', '=', 'customer_business_incomes.customer_id')
    //     ->leftJoin('branches', 'customers.branch_id', '=', 'branches.id')
    //     ->where('customers.id', $id)
    //     ->first();

        

    //         $selectedCollectors = $customers->pluck('collector_id')->toArray();

      
    //         if ($customers->customer_mortgage_type === 'Gold items') {
    //             $customersGoldItems = GoldItems::where('customer_id', $customers->id)->get();
    //             $customers->customersGoldItems = $customersGoldItems;
            
    //             foreach ($customersGoldItems as $goldItem) {
    //                 $GoldItemsImages = GoldItemsImages::where('gold_mortgage_id', $goldItem->id)->get();
    //                 $goldItem->GoldItemsImages = $GoldItemsImages;
    //             }
    //         }
    //         if ($customers->customer_mortgage_type === 'Electronic Devices') {
    //             $customersElectronicDevices = ElectronicDevices::where('customer_id', $customers->id)->get();
    //             $customers->customersElectronicDevices = $customersElectronicDevices;
            
    //             foreach ($customersElectronicDevices as $ElectronicDevicesimg) {
    //                 $ElectronicDevicesImages = electronicDevicesImages::where('devices_mortgage_id', $ElectronicDevicesimg->id)->get();
    //                 $ElectronicDevicesimg->ElectronicDevicesImages = $ElectronicDevicesImages;
    //             }
    //         }
    //         if ($customers->customer_mortgage_type === 'auto') {
    //             $customersVehicleMortgage = VehicleMortgage::where('customer_id', $customers->id)->get();
    //             $customers->customersVehicleMortgage = $customersVehicleMortgage;
            
    //             foreach ($customersVehicleMortgage as $VehicleMortgageImg) {
    //                 $VehicleImages = VehicleImage::where('vehicle_mortgage_id', $VehicleMortgageImg->id)->get();
    //                 $VehicleMortgageImg->VehicleImages = $VehicleImages;
    //             }
    //         }
    //         if ($customers->customer_mortgage_type === 'property') {
    //             $customersPropertyMortgage = PropertyMortgage::where('customer_id', $customers->id)->get();
    //             $customers->customersPropertyMortgage = $customersPropertyMortgage;
            
    //             foreach ($customersPropertyMortgage as $propertyMortgageImg) {
    //                 $propertyImages = PropertyImage::where('property_mortgage_id', $propertyMortgageImg->id)->get();
    //                 $propertyMortgageImg->propertyImages = $propertyImages;
    //             }
    //         }
        
    //     if ($customers) {
    //         $customersNICS = customersNICS::where('customer_id', $customers->id)->get();
    //         $customers->customersNICS = $customersNICS;
        
    //         $CustomersProPic = CustomersProPic::where('customer_id', $customers->id)->get();
    //         $customers->CustomersProPic = $CustomersProPic;
        
    //         return view('Section.ApplicantsList.allApplicantProfle', compact('customers', 'staffmembers', 'selectedCollectors'));

    //     } else {
    //         // Handle the case where the record with the specified ID doesn't exist
    //         return redirect()->route('staff-manage-blade');
    //     }
        
    // } 

    public function index(Request $request)
{   
    $id = $request->input('id');
    
    // Fetch staff members
    $staffmembers = RegisterStaffMembers::join('job_roles', 'register_staff_members.job_role', '=', 'job_roles.id')
        ->select('register_staff_members.*', 'job_roles.job_role')
        ->where('job_roles.job_role', 'Collector')
        ->get();

    // Fetch customer details
    $customers = customers::select('customers.*','branches.branch_name','mortgage_types.mortgage_type as customer_mortgage_type','customer_job_incomes.jobrole','customer_job_incomes.companyName','customer_job_incomes.companyAddress'
    ,'customer_job_incomes.jobContactNumber','customer_business_incomes.typeofBusiness','customer_business_incomes.businessName','customer_business_incomes.bussinessAddress'
    ,'customer_business_incomes.bussinessMoreInfo')
    ->leftJoin('customer_job_incomes', 'customers.id', '=', 'customer_job_incomes.customer_id')
    ->leftJoin('mortgage_types', 'customers.id', '=', 'mortgage_types.costomer_id')
    ->leftJoin('customer_self_emply_incomes', 'customers.id', '=', 'customer_self_emply_incomes.customer_id')
    ->leftJoin('customer_business_incomes', 'customers.id', '=', 'customer_business_incomes.customer_id')
    ->leftJoin('branches', 'customers.branch_id', '=', 'branches.id')
    ->where('customers.id', $id)
    ->first();

    $customerMortgageTypes = mortgage_type::where('costomer_id', $id)->get();

    $customersGoldItems = [];
    $customersElectronicDevices = [];
    $customersVehicleMortgage = [];
    $customersPropertyMortgage = [];
    
    foreach ($customerMortgageTypes as $mortgageType) {
        if ($mortgageType->mortgage_type === 'Gold items') {
            $goldItems = GoldItems::where('customer_id', $customers->id)->get()->toArray();

            foreach ($goldItems as $goldItem) {
                // Check if the gold item already exists in the array
                $existingGoldItem = collect($customersGoldItems)->first(function ($item) use ($goldItem) {
                    return $item['id'] == $goldItem['id'];
                });
            
                if (!$existingGoldItem) {
                    // If the gold item doesn't exist, fetch its images and add it to the array
                    $goldItem['GoldItemsImages'] = GoldItemsImages::where('gold_mortgage_id', $goldItem['id'])->get()->toArray();
                    $customersGoldItems[] = $goldItem;
                }
            }
            
        } elseif ($mortgageType->mortgage_type === 'Electronic Devices') {
            $electronicDevices = ElectronicDevices::where('customer_id', $customers->id)->get()->toArray();

            foreach ($electronicDevices as $electronicDevice) {
                // Check if the gold item already exists in the array
                $existingDevices = collect($customersElectronicDevices)->first(function ($item) use ($electronicDevice) {
                    return $item['id'] == $electronicDevice['id'];
                });
            
                if (!$existingDevices) {
                    // If the gold item doesn't exist, fetch its images and add it to the array
                    $electronicDevice['ElectronicDevicesImages'] = electronicDevicesImages::where('devices_mortgage_id', $electronicDevice['id'])->get()->toArray();
                    $customersElectronicDevices[] = $electronicDevice;
                }
            }
    
        } elseif ($mortgageType->mortgage_type === 'auto') {
            $vehicleMortgages = VehicleMortgage::where('customer_id', $customers->id)->get()->toArray();
    
            foreach ($vehicleMortgages as $vehicleMortgage) {
                // Check if the gold item already exists in the array
                $existingVehicle = collect($customersVehicleMortgage)->first(function ($item) use ($vehicleMortgage) {
                    return $item['id'] == $vehicleMortgage['id'];
                });
            
                if (!$existingVehicle) {
                    // If the gold item doesn't exist, fetch its images and add it to the array
                    $vehicleMortgage['VehicleImages'] = VehicleImage::where('vehicle_mortgage_id', $vehicleMortgage['id'])->get()->toArray();
                    $customersVehicleMortgage[] = $vehicleMortgage;
                }
            }

        } elseif ($mortgageType->mortgage_type === 'property') {
            $propertyMortgages = PropertyMortgage::where('customer_id', $customers->id)->get()->toArray();
    
            foreach ($propertyMortgages as $propertyMortgage) {
                $propertyMortgage['propertyImages'] = PropertyImage::where('property_mortgage_id', $propertyMortgage['id'])->get()->toArray();
            }
    
            // Add to the array
            $customersPropertyMortgage = array_merge($customersPropertyMortgage, $propertyMortgages);
        }
    }

    // Additional data to pass to the view
    $dataForView = [
        'customerMortgageTypes' =>$customerMortgageTypes,
        'customers' => $customers,
        'staffmembers' => $staffmembers,
        'selectedCollectors' => $customers->pluck('collector_id')->toArray(),
        'customersGoldItems' => $customersGoldItems,
        'customersElectronicDevices' => $customersElectronicDevices,
        'customersVehicleMortgage' => $customersVehicleMortgage,
        'customersPropertyMortgage' => $customersPropertyMortgage,
        'customersNICS' => customersNICS::where('customer_id', $customers->id)->get(),
        'CustomersProPic' => CustomersProPic::where('customer_id', $customers->id)->get(),
    ];

    if ($customers) {
        // Pass data to the view
        return view('Section.ApplicantsList.allApplicantProfle', $dataForView);
    } else {
        // Handle the case where the record with the specified ID doesn't exist
        return redirect()->route('staff-manage-blade');
    }
}

    public function getCostomerLoan($id)
    {

        $loanDetails = Loan::orderBy('loans.loanID', 'asc')
        ->join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
        ->join('customers', 'loans.customer_id', '=', 'customers.id')
        ->leftJoin('loan_interest_payments', 'loans.id', '=', 'loan_interest_payments.loan_id')
        ->leftJoin('payment_histories', 'loans.id', '=', 'payment_histories.loan_id')
        ->selectRaw('loans.*,customers.loanType, loan_payments.pay_amount, customers.id as customerId, customers.fullname, loan_payments.due_amount, loan_payments.total_amount as totalAmount, loan_payments.capital_amount, loan_interest_payments.interest_amount, SUM(CASE WHEN payment_histories.category_of_payment = "Interest amount only" THEN payment_histories.payment ELSE 0 END) as sum_interest_amount, SUM(CASE WHEN payment_histories.category_of_payment != "Capital amount only" THEN payment_histories.payment ELSE 0 END) as sum_pay_amount, MAX(loans.requested_amount) as requested_amount')
        ->where('customers.id', $id)
        ->where('loans.loan_status', 1)
        ->groupBy('loans.loanID','loans.ad_previes_outstand','customers.loanType','loans.created_at','updated_at','loan_payments.pay_amount','loans.installment_amount','loan_complete_time','loan_complete_date','loans.loan_status','loans.customer_id','loans.comments','loans.promissory_note','loans.penalty_status','loans.start_date','loans.end_date','loans.installments_count','loans.payment_method','loans.interest_schema','loans.fixedInterest','loans.interest_rate','loans.duration_time','loans.loan_type','loans.Previousoutstandingloans','loans.maximum_amount','loans.total_amount','requested_amount', 'loans.CustomLoanId', 'loans.id', 'customers.id', 'customers.fullname', 'loan_payments.due_amount', 'loan_payments.total_amount', 'loan_payments.capital_amount', 'loan_interest_payments.interest_amount')
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

    public function getCostomerCompleteLoan($id)
    {

        $loanDetails = Loan::orderby('loans.loanID', 'asc')
            ->Join('loan_payments', 'loans.id', '=', 'loan_payments.loan_id')
            ->Join('customers', 'loans.customer_id', '=', 'customers.id')
            ->select('loans.*','customers.nic','customers.fullname','customers.loanType','loan_payments.pay_amount','loan_payments.due_amount', 'loan_payments.total_amount as totalAmount' , 'loan_payments.capital_amount')
            ->where('customers.id', $id)
            ->where('loans.loan_status', 2)
            ->get();

        // Fetch all records
        $response['data'] = $loanDetails;
        return response()->json($response);
    }

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
        // dd($data );
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
        // $customer->loanType = 'microloan';
        $customer->update();

        $loanType = loanType::create([ 
            'loan_id' =>$loan->id,
            'loan_type'=> 'microloan',
            'customer_id' => $customerID
        ]);

        if ($loan && $loan_payment && $payment_history) {
            return response()->json(['success' => 'Loan Created Successfully!']);
        } else {
            return response()->json(['error' => 'Loan Creation Failed!']);
        }
    }
  
}
