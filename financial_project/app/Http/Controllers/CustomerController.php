<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

use App\Models\mortgage_type;

use App\Models\ElectronicDevices;
use App\Models\electronicDevicesImages;
use App\Models\GoldItems;
use App\Models\GoldItemsImages;

use App\Models\OtherMortgage;
use App\Models\OtherMortgageImages;

use App\Models\branches;
use App\Models\jobRole;

class CustomerController extends Controller
{
    public function verifyCostomer(Request $request)
    {
        $userId = $request->input('id');
        $loanStatus = $request->input('selectedValue');
        try {
            Customers::where('id', $userId)->update(['loanStatus' => $loanStatus]);
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }

        // Return a response to the AJAX request
        return response()->json(['success' => true]);
    }


    public function index(Request $request)
    {   
        $id = $request->input('id');
        
        // Use the $id to fetch the corresponding staff profile
    //   { // ...
        $staffmembers = RegisterStaffMembers::join('job_roles', 'register_staff_members.job_role', '=', 'job_roles.id')
        ->select('register_staff_members.*', 'job_roles.job_role')
        ->where('job_roles.job_role', 'Collector')
        ->get();
    
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

            $selectedCollectors = $customers->pluck('collector_id')->toArray();

            if ($customers->customer_mortgage_type === 'Gold items') {
                $customersGoldItems = GoldItems::where('customer_id', $customers->id)->get();
                $customers->customersGoldItems = $customersGoldItems;
            
                foreach ($customersGoldItems as $goldItem) {
                    $GoldItemsImages = GoldItemsImages::where('gold_mortgage_id', $goldItem->id)->get();
                    $goldItem->GoldItemsImages = $GoldItemsImages;
                }
            }
            if ($customers->customer_mortgage_type === 'Electronic Devices') {
                $customersElectronicDevices = ElectronicDevices::where('customer_id', $customers->id)->get();
                $customers->customersElectronicDevices = $customersElectronicDevices;
            
                foreach ($customersElectronicDevices as $ElectronicDevicesimg) {
                    $ElectronicDevicesImages = electronicDevicesImages::where('devices_mortgage_id', $ElectronicDevicesimg->id)->get();
                    $ElectronicDevicesimg->ElectronicDevicesImages = $ElectronicDevicesImages;
                }
            }
            if ($customers->customer_mortgage_type === 'auto') {
                $customersVehicleMortgage = VehicleMortgage::where('customer_id', $customers->id)->get();
                $customers->customersVehicleMortgage = $customersVehicleMortgage;
            
                foreach ($customersVehicleMortgage as $VehicleMortgageImg) {
                    $VehicleImages = VehicleImage::where('vehicle_mortgage_id', $VehicleMortgageImg->id)->get();
                    $VehicleMortgageImg->VehicleImages = $VehicleImages;
                }
            }
            if ($customers->customer_mortgage_type === 'property') {
                $customersPropertyMortgage = PropertyMortgage::where('customer_id', $customers->id)->get();
                $customers->customersPropertyMortgage = $customersPropertyMortgage;
            
                foreach ($customersPropertyMortgage as $propertyMortgageImg) {
                    $propertyImages = PropertyImage::where('property_mortgage_id', $propertyMortgageImg->id)->get();
                    $propertyMortgageImg->propertyImages = $propertyImages;
                }
            }
        
        if ($customers) {
            $customersNICS = customersNICS::where('customer_id', $customers->id)->get();
            $customers->customersNICS = $customersNICS;
        
            $CustomersProPic = CustomersProPic::where('customer_id', $customers->id)->get();
            $customers->CustomersProPic = $CustomersProPic;
        
            return view('Section.ApplicantsList.ApplicantProfile', compact('customers', 'staffmembers', 'selectedCollectors'));

        } else {
            // Handle the case where the record with the specified ID doesn't exist
            return redirect()->route('staff-manage-blade');
        }
        
    } 

    
    public function updateCustomer(Request $request)
    {
        $data = $request->all();
    
     
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|size:10',
            'nic' => 'required|string|between:10,12',          

        ]);
        $dataIdValue = $request->input('id');
        $updateData = [
            'fullname' => $data['name'],
            'address' => $data['address'],
            'contactNumber' => $data['phone'],
            'contactNumberFixed' => $data['Homephone'],
            'gender' => $data['gender'],
            'nic' => $data['nic'],
            'email' => $data['email'],
            'account_no' => $data['accountNo'],
            'bankName' => $data['BankName'],
            'branchname' => $data['Branchname'],
            'monthlygrossincome' => $data['MonthlyGrossIncome'],
            'monthlyExpenses' => $data['MonthlyExpenses'],
            'requestedAmount' => $data['RequestedAmount'],
            'paymentMethod' => $data['payment_method'],
            'detailspreviousloans' => $data['description']
        ];
        
        if (isset($data['selectedStaffmembers'])) {
            $updateData['collector_id'] = $data['selectedStaffmembers'];
        }
        
        customers::where('id', $dataIdValue)->update($updateData);
        if ($request->hasFile('staffPropic')) {
            // Handle staffPropic uploads
        }
    
        if ($request->hasFile('staffCVPdf')) {
            // Handle staffCVPdf uploads
        }
        return response()->json([
            'status' => 'success',
            'message' => 'success'
        ]);

 
    
    }
    public function deleteCustomer(Request $request)
    {
        $customerId = $request->input('costomerId');

        // Use the Customer model to delete the customer with the given ID
        $customer = customers::find($customerId);
    
        if ($customer) {
            $customer->delete();
    
            return response()->json(['message' => 'Customer deleted successfully']);
        } else {
            return response()->json(['error' => 'Customer not found'], 404);
        }


    }
}
