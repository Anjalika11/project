<?php

namespace App\Http\Controllers\ManageBusiness\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegisterStaffMembers;
use App\Models\branches;
use App\Models\jobRole;
use App\Models\RegisterStaffMembersProfileImg;
use App\Models\RegisterStaffMembersCvImg;

class staffProfileController extends Controller
{
    public function index(Request $request)
    {   
        $id = $request->input('id');
        // Use the $id to fetch the corresponding staff profile
      { // ...
        $branches = branches::all(); // Fetch all branch records
        $jobRoles = jobRole::all();// Fetch all branch records
    
            $RegisterStaffMembers = RegisterStaffMembers::select('register_staff_members.*', 'branches.branch_name' , 'branches.id as branchId', 'job_roles.job_role', 'job_roles.id as jobRoleId')
            ->leftJoin('branches', 'register_staff_members.branch', '=', 'branches.id')
            ->leftJoin('job_roles', 'register_staff_members.job_role', '=', 'job_roles.id')
            ->where('register_staff_members.id', $id)
            ->first();
        
        if ($RegisterStaffMembers) {
            $propicImages = RegisterStaffMembersProfileImg::where('staff_id', $RegisterStaffMembers->id)->get();
            $RegisterStaffMembers->proImages = $propicImages;
        
            $StaffCvPdf = RegisterStaffMembersCvImg::where('staff_id', $RegisterStaffMembers->id)->get();
            $RegisterStaffMembers->CvPdf = $StaffCvPdf;
        
            return view('Section.BusinessManage.Staff.staffProfile', compact('RegisterStaffMembers','jobRoles','branches'));
        } else {
            // Handle the case where the record with the specified ID doesn't exist
            return redirect()->route('staff-manage-blade');
        }
        
    } 
      
    }
}
