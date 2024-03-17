<?php

namespace App\Http\Controllers;
use App\Models\customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\branches;

class allaplicantsController extends Controller
{
    public function index()
    {
        return view('Section.ApplicantsList.allApplicants');
    }

    public function getallApplicantsDetails()
    {
        $branch_id = Session('branch_id');
     

        $loanDetails = '';
        if(Session('role')=='admin'){
            $loanDetails = customers::join('branches', 'branches.id', '=', 'customers.branch_id')->orderby('customers.id', 'asc')->select('customers.*', 'branches.branch_name')->get();
        }else{
            $loanDetails = customers::join('branches', 'branches.id', '=', 'customers.branch_id')->orderby('customers.id', 'asc')->select('customers.*', 'branches.branch_name')->where('customers.branch_id', $branch_id)->get();
        }
        // Fetch all records
        $response['data'] = $loanDetails;
        return response()->json($response);
    }
}
