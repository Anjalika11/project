<?php

namespace App\Http\Controllers\Verify;
use App\Http\Controllers\Controller;
use App\Models\customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mortgageVerifyApplicants extends Controller
{
    public function index()
    {
        return view('Section.VerifyApplicants.mortgageVerifyApplicants');
    }

    public function getMortgageCostomerDetails()
    {
        $branch_id = Session('branch_id');
     

        $loanDetails = '';
        if(Session('role')=='admin'){
            $loanType = 'mortgageloan';
            $loanDetails = customers::orderby('id', 'asc')->select('*')->where('customers.loanType', $loanType)->get();
  
        }else{
            $loanType = 'mortgageloan';
            $loanDetails = customers::orderby('id', 'asc')->select('*')->where('customers.loanType', $loanType)->where('customers.branch_id', $branch_id)->get();
       
        }
         // Fetch all records
         $response['data'] = $loanDetails;
         return response()->json($response);
    }
}
