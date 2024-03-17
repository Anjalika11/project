<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterStaffMembers;
use App\Models\jobRole;
use App\Models\customers;
use App\Models\CustomerJobIncome;
use App\Models\CustomerBusinessIncome;
use App\Models\CustomerSelfEmplyIncome;
use App\Models\CustomerPaySlip;
use App\Models\customersNICS;
use App\Models\CustomerBankStatement;
use App\Models\CustomersProPic;
class microLoanApplicantRegsterController extends Controller
{
    public function index()
    {
        $staffmembers = RegisterStaffMembers::join('job_roles', 'register_staff_members.job_role', '=', 'job_roles.id')
        ->select('register_staff_members.*', 'job_roles.job_role')
        ->where('job_roles.job_role', 'Collector')
        ->get();
        return view('Section.ApplicantsRegistration.microLoanApplicantRegster', compact('staffmembers'));
    }

    public function storeMicroLoanCustomer(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|size:10',
            'nic' => 'required|string|between:10,12',            

        ]);

        $loan_type = 'microloan';
        $loan_status = 0;
        $income_source = $data['incomeSource'];

        $customer = customers::create([
            'fullname' => $data['name'],
            'address' => $data['address'],
            'contactNumber' => $data['phone'],
            'contactNumberFixed' => $data['Homephone'],
            'gender' => $data['gender'],
            'nic' => $data['nic'],
            'email'=> $data['email'],
            'account_no' => $data['accountNo'],
            'bankName' => $data['BankName'],
            'branchname' => $data['Branchname'],
            'incomeSource' => $income_source,
            'monthlygrossincome' => $data['MonthlyGrossIncome'],
            'monthlyExpenses' => $data['MonthlyExpenses'],
            'detailspreviousloans' => $data['description'],
            'loanType' => $loan_type,
            'requestedAmount' => $data['RequestedAmount'],
            'paymentMethod' => $data['payment_method'],
            'loanStatus' => $loan_status,
            'mortgage_type' => "no",
            'branch_id'=> $data['branchId'],
            'collector_id'=> $data['selectedStaffmembers'],
        ]);

     
        if ($income_source == "Job") {
            $job_income = CustomerJobIncome::create([
                'jobrole' => $data['Jobrole'],
                'companyName' => $data['CompanyName'],
                'companyAddress' => $data['CompanyAddress'],
                'jobContactNumber' => $data['jobContactNumber'],
                'customer_id' => $customer->id
            ]);

            // store pay slips
            if ($request->hasFile('paySlip')) {
                foreach ($request->file('paySlip') as $index => $image) {
                    $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                    $image->move('img/customers/pay_slips', $imageName);

                    $customerNic = new CustomerPaySlip();
                    $customerNic->customer_pay_slip = $imageName;
                    $customerNic->job_id = $job_income->id;
                    $customerNic->save();
                }
            }
        } else if ($income_source == "Business") {
            $business_income = CustomerBusinessIncome::create([
                'typeofBusiness' => $data['TypeofBusiness'],
                'businessName' => $data['BusinessName'],
                'bussinessAddress' => $data['BussinessAddress'],
                'bussinessMoreInfo' => $data['BussinessMoreInfo'],
                'customer_id' => $customer->id
            ]);
        } else if ($income_source == "SelfEmplyed") {
            $self_emply_income = CustomerSelfEmplyIncome::create([
                'typeofIncome' => $data['TypeofIncome'],
                'selfEmployinfo' => $data['SelfEmployinfo'],
                'customer_id' => $customer->id
            ]);
        }


        if ($request->hasFile('CustomernNICpic')) {
            foreach ($request->file('CustomernNICpic') as $index => $image) {
                $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                $image->move('img/customers/nics', $imageName);

                $customerNic = new CustomerNIC();
                $customerNic->customer_nic = $imageName;
                $customerNic->customer_id = $customer->id;
                $customerNic->save();
            }
        }
        if ($request->hasFile('CustomerPropic')) {
            foreach ($request->file('CustomerPropic') as $index => $image) {
                $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                $image->move('img/customers/ProPic', $imageName);

                $CustomersProPic = new CustomersProPic();
                $CustomersProPic->customer_proPic = $imageName;
                $CustomersProPic->customer_id = $customer->id;
                $CustomersProPic->save();
            }
        }
        
        // store banks statements
        if ($request->hasFile('customerBankStatement')) {
            foreach ($request->file('customerBankStatement') as $index => $image) {
                $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                $image->move('img/customers/bank_statements', $imageName);

                $customerNic = new CustomerBankStatement();
                $customerNic->customer_bank_statement = $imageName;
                $customerNic->customer_id = $customer->id;
                $customerNic->save();
            }
        }


        if (isset($customer)) {
            // if everything is successful
            return response()->json([
                'status' => 'Success',
                'message' => 'Customer created successfully'
            ]);
        } else {
            // if there was an error creating the customer
            return response()->json([
                'status' => 'Error',
                'message' => 'There was an error creating the customer'
            ]);
        }

       
    }
}
