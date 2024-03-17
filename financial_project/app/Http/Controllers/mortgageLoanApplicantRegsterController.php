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

use App\Models\OtherMortgage;
use App\Models\OtherMortgageImages;
use App\Models\loanType;

use App\Models\mortgage_type;

class mortgageLoanApplicantRegsterController extends Controller
{
    public function index()
    {
        $staffmembers = RegisterStaffMembers::join('job_roles', 'register_staff_members.job_role', '=', 'job_roles.id')
        ->select('register_staff_members.*', 'job_roles.job_role')
        ->where('job_roles.job_role', 'Collector')
        ->get();
        return view('Section.ApplicantsRegistration.mortgageLoanApplicantRegster', compact('staffmembers'));
    }

    
    
    public function storeMortgageLoanCustomer(Request $request)
    {
        $data = $request->all();
        // dd($data);
      
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|size:10',
            'nic' => 'required|string|between:10,12',            

        ]);

        $loan_type = 'mortgageloan';
        $loan_status = 0;
        $income_source = $data['incomeSource'];
        $selected_mortgage_type = $data['selected_mortgage_type'];

        $Jobrole = $data['Jobrole'];
       
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
            'mortgage_type' => $selected_mortgage_type,
            'mortgage_sub_type'=> $data['mortgage_sub_type'],
            'branch_id'=> $data['branchId'],
            'collector_id'=> $data['selectedStaffmembers'],
        ]);

        mortgage_type::create([
            'costomer_id' => $customer->id,
            'mortgage_type'=> $data['mortgage_sub_type'],
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
            // dd($data);
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

                $customerNic = new customersNICS();
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


        if ($selected_mortgage_type == "auto_mortgage") {
            $vehicle_mortgage = VehicleMortgage::create([
                'auto_vehicle_category' => $data['auto_vehicle_category'],
                'auto_vehicle_brand' => $data['auto_vehicle_brand'],
                'auto_vehicle_model' => $data['auto_vehicle_model'],
                'auto_vehicle_year' => $data['auto_vehicle_year'],
                'auto_vehicle_mileage' => $data['auto_vehicle_mileage'],
                'auto_vehicle_engine_capacity' => $data['auto_vehicle_engine_capacity'],
                'auto_vehicle_market_price' => $data['auto_vehicle_market_price'],
                'auto_vehicle_suggested_price' => $data['auto_vehicle_suggested_price'],
                'auto_vehicle_engine_number' => $data['auto_vehicle_engine_number'],
                'auto_vehicle_more' => $data['auto_vehicle_more'],
                'status'=> "Available",
                'customer_id' => $customer->id
                
            ]);
            // storing vehicle_images
            if ($request->hasFile('vehicle_images')) {
                foreach ($request->file('vehicle_images') as $index => $image) {
                    $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                    $image->move('img/mortgages/vehicles/vehicle_images', $imageName);

                    $vehicle_image = new VehicleImage();
                    $vehicle_image->vehicle_image = $imageName;
                    $vehicle_image->vehicle_mortgage_id = $vehicle_mortgage->id;
                    $vehicle_image->save();
                }
            }
            // storing vehicle_book_images
            if ($request->hasFile('vehicleBookImages')) {
                foreach ($request->file('vehicleBookImages') as $index => $image) {
                    $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                    $image->move('img/mortgages/vehicles/vehicle_book_images', $imageName);

                    $vehicle_book_image = new VehicleBookImage();
                    $vehicle_book_image->vehicle_book_image = $imageName;
                    $vehicle_book_image->vehicle_mortgage_id = $vehicle_mortgage->id;
                    $vehicle_book_image->save();
                }
            }
        } else if ($selected_mortgage_type == "property_mortgage") {
            // store property mortgage--------------------------------------------------------
            $property_mortgage = PropertyMortgage::create([
                'property_type' => $data['property_type'],
                'property_province' => $data['property_province'],
                'property_district' => $data['property_district'],
                'property_address1' => $data['property_address'],
                'property_state' => $data['property_state'],
                'property_assessed_value' => $data['property_assessed_value'],
                'property_suggested_value' => $data['property_suggested_value'],
                'property_postal_code' => $data['property_postal_code'],
                'property_land_size' => $data['property_land_size'],
                'property_size_sqft' => $data['property_size_sqft'],
                'property_bed_rooms' => $data['property_bed_rooms'],
                'property_more' => $data['property_more'],
                'status' => "Available",
                'customer_id' => $customer->id
            ]);
            // storing property_images
            if ($request->hasFile('propertyImages')) {
                foreach ($request->file('propertyImages') as $index => $image) {
                    $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                    $image->move('img/mortgages/properties/property_images', $imageName);

                    $property_image = new PropertyImage();
                    $property_image->property_image = $imageName;
                    $property_image->property_mortgage_id = $property_mortgage->id;
                    $property_image->save();
                }
            }
            // storing property_book_images
            if ($request->hasFile('propertyBookImages')) {
                foreach ($request->file('propertyBookImages') as $index => $image) {
                    $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                    $image->move('img/mortgages/properties/property_book_images', $imageName);

                    $property_book_image = new PropertyBookImage();
                    $property_book_image->property_book_image = $imageName;
                    $property_book_image->property_mortgage_id = $property_mortgage->id;
                    $property_book_image->save();
                }
            }
        } else if ($selected_mortgage_type == "other_mortgage") {
            if ($data['Mortgage_Type'] == "Other"){
                $Other_Mortgage = OtherMortgage::create([
                    'other_title' => $data['otherTitle'],
                    'other_market_price' => $data['other_assessed_value'],
                    'other_suggested_price' => $data['other_suggested_value'],
                    'other_more' => $data['other_more'],
                    'status' => "Available",
                    'customer_id' => $customer->id
                ]);
                if ($request->hasFile('other_images')) {
                    foreach ($request->file('other_images') as $index => $image) {
                        $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                        $image->move('img/mortgages/otherImages/otherImages', $imageName);
    
                        $other_image = new OtherMortgageImages();
                        $other_image->other_image = $imageName;
                        $other_image->other_mortgage_id = $Other_Mortgage->id;
                        $other_image->save();
                    }
                }

            }
            else  if ($data['Mortgage_Type']  == "Gold items") {
                foreach ($data['mortgageData'] as $rowData) {
                $Other_Mortgage = GoldItems::create([
                    'gold_type' => $rowData['mortgageSubType'],
                    'gold_pound' => $rowData['TotalPound'],
                    // 'Other_gold_item' => $rowData['OtherGoldItem'],
                    'weight' => $rowData['Totalweight'],
                    'gold_market_price' => $rowData['other_assessed_value'],
                    'gold_suggested_price' => $rowData['other_suggested_value'],
                    'gold_more' => $rowData['other_more'],
                    'status' => "Available",
                    'customer_id' => $customer->id
                ]);
        
                if (isset($rowData['images'])) {
                    foreach ($rowData['images'] as $index => $image) {
                        $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                        $image->move('img/mortgages/otherImages/goldImages', $imageName);
        
                        $other_image = new GoldItemsImages();
                        $other_image->gold_image = $imageName;
                        $other_image->gold_mortgage_id = $Other_Mortgage->id;
                        $other_image->save();
                    }
                }
            }
            }
            else if ($data['Mortgage_Type'] == "Electronic Devices"){
                $Other_Mortgage = ElectronicDevices::create([
                    'devices_type' => $data['mortgage_sub_type'],
                    'devices_brand' => $data['DeviceBrand'],
                    'devices_model' => $data['DeviceModel'],
                    
                    'devices_market_price' => $data['other_assessed_value'],
                    'devices_suggested_price' => $data['other_suggested_value'],
                    'devices_more' => $data['other_more'],
                    'status' => "Available",
                    'customer_id' => $customer->id
                ]);
                if ($request->hasFile('other_images')) {
                    foreach ($request->file('other_images') as $index => $image) {
                        $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                        $image->move('img/mortgages/otherImages/ElectronicDevices', $imageName);
    
                        $other_image = new electronicDevicesImages();
                        $other_image->devices_image = $imageName;
                        $other_image->devices_mortgage_id = $Other_Mortgage->id;
                        $other_image->save();
                    }
                }

            }
        
            
            // yet to go
        }

        // check if the $customer object exists
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
