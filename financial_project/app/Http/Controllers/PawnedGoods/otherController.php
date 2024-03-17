<?php

namespace App\Http\Controllers\PawnedGoods;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\electronicDevicesImages;
use App\Models\GoldItems;
use App\Models\ElectronicDevices;
use App\Models\GoldItemsImages;
use Carbon\Carbon;
use App\Models\mortgage_type;
use Illuminate\Support\Facades\DB;

class otherController extends Controller
{
    public function index()
    {
        $auction_gold = GoldItems::leftJoin('customers', 'gold_items.customer_id', '=', 'customers.id')->where('status', 'For auction')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->count();
        $available_gold = GoldItems::leftJoin('customers', 'gold_items.customer_id', '=', 'customers.id')->where('status', 'Available')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->count();
        $released_gold = GoldItems::leftJoin('customers', 'gold_items.customer_id', '=', 'customers.id')->where('status', 'Released')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->count();
        $sumReleasedGoldWeight = GoldItems::leftJoin('customers', 'gold_items.customer_id', '=', 'customers.id')->where('status', 'Released')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->sum('weight');
        $sumAvailableGoldWeight= GoldItems::leftJoin('customers', 'gold_items.customer_id', '=', 'customers.id')->where('status', 'Available')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->sum('weight');
        $sumGoldWeight= GoldItems::leftJoin('customers', 'gold_items.customer_id', '=', 'customers.id')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->sum('weight');
        $total_gold = GoldItems::leftJoin('customers', 'gold_items.customer_id', '=', 'customers.id')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->count();

        $sumAuctionGoldWeight = GoldItems::leftJoin('customers', 'gold_items.customer_id', '=', 'customers.id')->where('status', 'For auction')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->sum('weight');

        $total_devices = ElectronicDevices::leftJoin('customers', 'electronic_devices.customer_id', '=', 'customers.id')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->count();
        $available_devices= ElectronicDevices::leftJoin('customers', 'electronic_devices.customer_id', '=', 'customers.id')->where('status', 'Available')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->count();
        $released_devices = ElectronicDevices::leftJoin('customers', 'electronic_devices.customer_id', '=', 'customers.id')->where('status', 'Released')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->count();
        return view('Section.PawnsGoods.otherPawnList', [
            'available_gold' => $available_gold,
            'sumReleasedGoldWeight' => $sumReleasedGoldWeight,
            'sumAvailableGoldWeight' => $sumAvailableGoldWeight,
            'sumGoldWeight' => $sumGoldWeight,
            'released_gold' => $released_gold,
            'total_gold' => $total_gold,
            'total_devices' => $total_devices,
            'available_devices' => $available_devices,
            'released_devices' => $released_devices,
            'auction_gold' => $auction_gold,
            'sumAuctionGoldWeight' => $sumAuctionGoldWeight,
        ]);
    }

    public function getgoldmortgagelist()
    {
        $loanDetails = GoldItems::leftJoin('customers', 'gold_items.customer_id', '=', 'customers.id')
        ->leftJoin('loans', 'customers.id', '=', 'loans.customer_id')
        ->leftJoin('mortgage_types', 'customers.id', '=', 'mortgage_types.costomer_id')
        ->select(
            'gold_items.loan_id',
            'loans.start_date',
            'gold_items.id as itemId',
            'customers.id as CustomerId',
            DB::raw('MAX(loans.CustomLoanId) as loanId'),
            DB::raw('MAX(loans.start_date) as start_date'),
            DB::raw('MAX(loans.end_date) as end_date'),
            'customers.fullname',
            'gold_items.gold_pound',
            'gold_items.weight',
            'gold_items.gold_type',
            'gold_items.status'
        )
        ->where(function ($query) {
            $query->where('customers.loanStatus', '3')
                  ->orWhere('customers.loanStatus', '4');
        })
        ->where('customers.loanType', 'mortgageloan')
        ->whereColumn('gold_items.loan_id', 'loans.id')
        ->groupBy('gold_items.loan_id','loans.start_date','itemId','CustomerId','customers.fullname','gold_items.gold_pound','gold_items.weight','gold_items.gold_type', 'gold_items.status')
        ->get();

        $response['data'] = $loanDetails;
        return response()->json($response);
    }


    public function getOverduegoldmortgagelist()
    {
        $currentDate = Carbon::now()->toDateString();
        $loanDetails = GoldItems::leftJoin('customers', 'gold_items.customer_id', '=', 'customers.id')
        ->leftJoin('loans', 'customers.id', '=', 'loans.customer_id')
        ->leftJoin('mortgage_types', 'customers.id', '=', 'mortgage_types.costomer_id')
        ->select(
            'gold_items.loan_id',
            'gold_items.id as itemId',
            'customers.id as CustomerId',
            DB::raw('MAX(loans.CustomLoanId) as loanId'),
            DB::raw('MAX(loans.start_date) as start_date'),
            DB::raw('MAX(loans.end_date) as end_date'),
            'customers.fullname',
            'gold_items.gold_pound',
            'gold_items.weight',
            'gold_items.gold_type',
            'gold_items.status'
        )
        ->where(function ($query) {
            $query->where('customers.loanStatus', '3')
                  ->orWhere('customers.loanStatus', '4');
        })
        ->where('customers.loanType', 'mortgageloan')
        ->where('loans.end_date', '<', $currentDate )
        ->whereColumn('gold_items.loan_id', 'loans.id')
        ->groupBy('gold_items.loan_id','itemId','CustomerId','customers.fullname','gold_items.gold_pound','gold_items.weight','gold_items.gold_type', 'gold_items.status')
        ->get();

        $response['data'] = $loanDetails;
        return response()->json($response);
    }


    

    public function getdevicesmortgagelist()
    {
        $loanDetails = ElectronicDevices::leftJoin('customers', 'electronic_devices.customer_id', '=', 'customers.id')
        ->leftJoin('loans', 'customers.id', '=', 'loans.customer_id')
        ->leftJoin('mortgage_types', 'customers.id', '=', 'mortgage_types.costomer_id')
        ->select(
            'electronic_devices.loan_id',
            'electronic_devices.id as itemId',
            'customers.id as CustomerId',
            DB::raw('MAX(loans.CustomLoanId) as loanId'),
            DB::raw('MAX(loans.start_date) as start_date'),
            DB::raw('MAX(loans.end_date) as end_date'),
            'customers.fullname',
            'electronic_devices.status',
            'electronic_devices.devices_brand',
            'electronic_devices.devices_type',
          
        )
        ->where(function ($query) {
            $query->where('customers.loanStatus', '3')
                  ->orWhere('customers.loanStatus', '4');
        })
        ->where('customers.loanType', 'mortgageloan')
        ->whereColumn('electronic_devices.loan_id', 'loans.id')
        ->groupBy('electronic_devices.loan_id','itemId','CustomerId','customers.fullname','electronic_devices.devices_model','electronic_devices.devices_type','electronic_devices.devices_brand', 'electronic_devices.status')
        ->get();

        $response['data'] = $loanDetails;
    
        return response()->json($response);
    }
    public function editGoldStatus(Request $request)
    {
       // Retrieve the 'id' from the request
        $id = $request->input('id');

// Retrieve the 'status' from the request, assuming it is present in your request
        $status = $request->input('selectedValue');

// Update the 'status' of the 'GoldItems' model with the given 'id'
        $status_update = GoldItems::where('id', $id)
        ->update([
        'status' => $status,
        ]);

// Prepare the response based on the update result
        if ($status_update) {
            $response['message'] = 'Loan status updated successfully';
        } else {
            $response['message'] = 'Failed to update loan status';
        }

        
    }
    
}
