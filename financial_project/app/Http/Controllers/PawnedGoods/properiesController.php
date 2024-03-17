<?php

namespace App\Http\Controllers\PawnedGoods;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyMortgage;
use App\Models\mortgage_type;
use Illuminate\Support\Facades\DB;
class properiesController extends Controller
{
    public function index()
    {

        $total_Properties = PropertyMortgage::leftJoin('customers', 'property_mortgages.customer_id', '=', 'customers.id')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->count();
        $available_Properties= PropertyMortgage::leftJoin('customers', 'property_mortgages.customer_id', '=', 'customers.id')->where('status', 'Available')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->count();
        $released_Properties = PropertyMortgage::leftJoin('customers', 'property_mortgages.customer_id', '=', 'customers.id')->where('status', 'Released')->where('customers.loanStatus','!=', '2')->where('customers.loanStatus','!=', '0')->where('customers.loanStatus','!=', '1')->count();

        return view('Section.PawnsGoods.propertiesList', [
            'total_Properties' => $total_Properties,
            'available_Properties' => $total_Properties,
            'total_Properties' => $total_Properties,
        ]);
       
    }

    public function getPropertiesmortgagelist()
    {
        $loanDetails = PropertyMortgage::leftJoin('customers', 'vehicle_mortgages.customer_id', '=', 'customers.id')
        ->leftJoin('loans', 'customers.id', '=', 'loans.customer_id')
        ->leftJoin('mortgage_types', 'customers.id', '=', 'mortgage_types.costomer_id')
        ->select(
            'property_mortgages.loan_id',
            'property_mortgages.id as itemId',
            'customers.id as CustomerId',
            DB::raw('MAX(loans.CustomLoanId) as loanId'),
            DB::raw('MAX(loans.start_date) as start_date'),
            DB::raw('MAX(loans.end_date) as end_date'),
            'customers.fullname',
            'property_mortgages.property_type',
            'property_mortgages.property_district',
            'property_mortgages.property_address',
            'property_mortgages.status'
        )
        ->where(function ($query) {
            $query->where('customers.loanStatus', '3')
                  ->orWhere('customers.loanStatus', '4');
        })
        ->where('customers.loanType', 'mortgageloan')
        ->whereColumn('property_mortgages.loan_id', 'loans.id')
        ->groupBy('property_mortgages.loan_id','itemId','CustomerId','customers.fullname','property_mortgages.property_type','property_mortgages.property_district','property_mortgages.property_address', 'property_mortgages.status')
        ->get();

        $response['data'] = $loanDetails;
        return response()->json($response);
    }
}
