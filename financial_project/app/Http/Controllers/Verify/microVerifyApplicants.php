<?php

namespace App\Http\Controllers\Verify;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customers;
use Illuminate\Support\Facades\Session;
class microVerifyApplicants extends Controller
{
    public function index()
    {
        return view('Section.VerifyApplicants.microVerifyApplicants');
    }
    public function getMicroUserDetails()
    {
        $loanType = 'microloan';
        $branch_id = Session('branch_id');
     
        $loanDetails = '';
        if(Session('role')=='admin'){
            $loanDetails = customers::orderby('id', 'asc')->select('*')->where('customers.loanType', $loanType)->get();
  
        }else{
            $loanDetails = customers::orderby('id', 'asc')->select('*')->where('customers.loanType', $loanType)->where('customers.branch_id', $branch_id)->get();
       
        }

        // Fetch all records
        $response['data'] = $loanDetails;
        return response()->json($response);
    }
}
