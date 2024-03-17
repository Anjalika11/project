<?php

namespace App\Http\Controllers\ManageBusiness\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\branches;
use App\Models\jobRole;
use App\Models\RegisterStaffMembers;
use App\Models\RegisterStaffMembersProfileImg;
use App\Models\RegisterStaffMembersCvImg;

class adstaffController extends Controller
{
    
    public function index()
    {
      
        $branches = branches::all(); // Fetch all branch records
        $jobRoles = jobRole::all();// Fetch all branch records
        return view('Section.BusinessManage.Staff.adStaff', compact('branches', 'jobRoles'));
       
    }
    public function storeStaffMember(Request $request)
    {
        $data = $request->all();
   
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|size:10',
            'jobRole' => 'required|string|max:255',
            'branch' => 'required|string|max:255',          

        ]);

        $RegisterStaffMembers = RegisterStaffMembers::create([
            'name' =>  $data['name'],
            'address' => $data['address'],
            'phone_number' =>  $data['phone'],
            'fix_phone_number' =>  $data['Homephone'],
            'email' =>  $data['email'],
            'date_of_joining' => $data['date'],
            'description' =>  $data['description'],
            'job_role' => $data['jobRole'],
            'branch' => $data['branch'],
        
        ]);
        if ($request->hasFile('staffPropic')) {
            foreach ($request->file('staffPropic') as $index => $image) {
                $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                $image->move('img/staff/profilePicture', $imageName);

                $RegisterStaffMembersProfileImg = new RegisterStaffMembersProfileImg();
                $RegisterStaffMembersProfileImg->staff_profile_img = $imageName;
                $RegisterStaffMembersProfileImg->staff_id = $RegisterStaffMembers->id;
                $RegisterStaffMembersProfileImg->save();
            }
        }
        if ($request->hasFile('staffCVPdf')) {
            foreach ($request->file('staffCVPdf') as $index => $image) {
                $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                $image->move('img/staff/CvPdf', $imageName);

                $RegisterStaffMembersCvImg = new RegisterStaffMembersCvImg();
                $RegisterStaffMembersCvImg->staff_cv_pdf = $imageName;
                $RegisterStaffMembersCvImg->staff_id = $RegisterStaffMembers->id;
                $RegisterStaffMembersCvImg->save();
            }
        }
    }
    public function updateStaffMember(Request $request)
    {
        $data = $request->all();
     
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|size:10',
            'jobRole' => 'required|string|max:255',
            'branch' => 'required|string|max:255',          

        ]);
        $dataIdValue = $request->input('dataIdValue');
        RegisterStaffMembers::where('id', $dataIdValue)->update([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone'),
            'fix_phone_number' => $request->input('Homephone'),
            'email' => $request->input('email'),
            'job_role' => $request->input('jobRole'),
            'branch' => $request->input('branch'),
            'description' => $request->input('description'),
            // Add more fields to update here
        ]);
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
    public function deleteStaffMember(Request $request)
    {
        $data = $request->all();
        $userId = $data['userId'];

    // Use the StaffMember model to find and delete the staff member
        $staffMember = RegisterStaffMembers::find($userId);

        if (!$staffMember) {
            return response()->json(['message' => 'Staff member not found'], 404);
        }

        $staffMember->delete();

        return response()->json(['message' => 'Staff member deleted'], 200);
     
        }
}
