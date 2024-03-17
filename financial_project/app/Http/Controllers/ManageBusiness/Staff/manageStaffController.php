<?php

namespace App\Http\Controllers\ManageBusiness\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\branches;
use App\Models\jobRole;
use App\Models\RegisterStaffMembers;
use App\Models\RegisterStaffMembersCvImg;
use App\Models\RegisterStaffMembersProfileImg;
class manageStaffController extends Controller
{
    public function index()
    {
      
        return view('Section.BusinessManage.Staff.manageStaff');
       
    }
    public function getStaffList()
    {
      
        $RegisterStaffMembers = RegisterStaffMembers::select('register_staff_members.*', 'branches.branch_name' , 'branches.id as branchId', 'job_roles.job_role', 'job_roles.id as jobRoleId')
        ->leftJoin('branches','register_staff_members.branch','=','branches.id')
        ->leftJoin('job_roles','register_staff_members.job_role','=','job_roles.id')->get();

        // Loop through the results and format the created_at column as a date
        foreach ($RegisterStaffMembers as $propic) {
            $propicImages = RegisterStaffMembersProfileImg::where('staff_id', $propic->id)->get();
            $propic->proImages = $propicImages;
        }
        foreach ($RegisterStaffMembers as $cv) {
            $StaffCvPdf = RegisterStaffMembersCvImg::where('staff_id', $cv->id)->get();
            $cv->CvPdf = $StaffCvPdf;
        }

        
        $response['data'] = $RegisterStaffMembers;
        return response()->json($response);
       
    }
    
}
