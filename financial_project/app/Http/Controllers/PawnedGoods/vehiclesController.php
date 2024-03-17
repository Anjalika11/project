<?php

namespace App\Http\Controllers\PawnedGoods;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleMortgage;
use App\Models\mortgage_type;
use Illuminate\Support\Facades\DB;

class vehiclesController extends Controller
{
    public function index()
    {
        $total_vehicles = VehicleMortgage::leftJoin('customers', 'vehicle_mortgages.customer_id', '=', 'customers.id')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->count();
        $available_vehicles= VehicleMortgage::leftJoin('customers', 'vehicle_mortgages.customer_id', '=', 'customers.id')->where('status', 'Available')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->count();
        $released_vehicles = VehicleMortgage::leftJoin('customers', 'vehicle_mortgages.customer_id', '=', 'customers.id')->where('status', 'Released')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->count();

        return view('Section.PawnsGoods.vehiclesList', [
            'total_vehicles' => $total_vehicles,
            'available_vehicles' => $available_vehicles,
            'released_vehicles' => $released_vehicles,
        ]);
    }

    public function getVehiclemortgagelist()
    {
        $loanDetails = VehicleMortgage::leftJoin('customers', 'vehicle_mortgages.customer_id', '=', 'customers.id')
        ->leftJoin('loans', 'customers.id', '=', 'loans.customer_id')
        ->leftJoin('mortgage_types', 'customers.id', '=', 'mortgage_types.costomer_id')
        ->select(
            'vehicle_mortgages.loan_id',
            'vehicle_mortgages.id as itemId',
            'customers.id as CustomerId',
            DB::raw('MAX(loans.CustomLoanId) as loanId'),
            DB::raw('MAX(loans.start_date) as start_date'),
            DB::raw('MAX(loans.end_date) as end_date'),
            'customers.fullname',
            'vehicle_mortgages.auto_vehicle_brand',
            'vehicle_mortgages.auto_vehicle_model',
            'vehicle_mortgages.auto_vehicle_engine_number',
            'vehicle_mortgages.status'
        )
        ->where(function ($query) {
            $query->where('customers.loanStatus', '3')
                  ->orWhere('customers.loanStatus', '4');
        })
        ->where('customers.loanType', 'mortgageloan')
        ->whereColumn('vehicle_mortgages.loan_id', 'loans.id')
        ->groupBy('vehicle_mortgages.loan_id','itemId','CustomerId','customers.fullname','vehicle_mortgages.auto_vehicle_brand','vehicle_mortgages.auto_vehicle_model','vehicle_mortgages.auto_vehicle_engine_number', 'vehicle_mortgages.status')
        ->get();

        $response['data'] = $loanDetails;
        return response()->json($response);
    }
}
