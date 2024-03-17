<?php

namespace App\Http\Controllers\ManageBusiness\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\staffSalary;
use App\Models\RegisterStaffMembers;
use App\Models\RegisterStaffMembersCvImg;
use App\Models\RegisterStaffMembersProfileImg;


class staffSalaryController extends Controller
{
    public function storeStaffSalary(Request $request){
        $data = $request->all();


        $request->validate([
            'Amount' => 'required|numeric',
            'submitDate' => 'required|date',
        ]);

        $staffSalary = staffSalary::create([
            'staff_id' =>  $data['userId'],
            'date' => $data['submitDate'],
            'amount' =>  $data['Amount'],        
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'success'
        ]);
    }

    
    public function getStaffTotalSalary(){
        $staffSalary = staffSalary::selectRaw('
        staff_salaries.staff_id,
        register_staff_members.name,
        COUNT(staff_salaries.date) as number_of_months,
        SUM(staff_salaries.amount) as total_salary'
    )
    ->leftJoin('register_staff_members', 'staff_salaries.staff_id', '=', 'register_staff_members.id')
    ->groupBy('staff_salaries.staff_id', 'register_staff_members.name', )
    ->get();
    
        foreach ($staffSalary as $propic) {
            $propicImages = RegisterStaffMembersProfileImg::where('staff_id', $propic->staff_id)->get();
            $propic->proImages = $propicImages;
        }
        foreach ($staffSalary as $cv) {
            $StaffCvPdf = RegisterStaffMembersCvImg::where('staff_id', $cv->staff_id)->get();
            $cv->CvPdf = $StaffCvPdf;
        }
    
        $response['data'] = $staffSalary;
        return response()->json($response);

      
    }
    public function getStaffSalary($id){
        $staffSalary = staffSalary::select([
            'staff_salaries.*',
            'register_staff_members.name as staff_name'
        ])
        ->leftJoin('register_staff_members', 'staff_salaries.staff_id', '=', 'register_staff_members.id')
        ->where('staff_salaries.staff_id', '=', $id)
        ->get();
    
        foreach ($staffSalary as $propic) {
            $propicImages = RegisterStaffMembersProfileImg::where('staff_id', $propic->staff_id)->get();
            $propic->proImages = $propicImages;
        }
        foreach ($staffSalary as $cv) {
            $StaffCvPdf = RegisterStaffMembersCvImg::where('staff_id', $cv->staff_id)->get();
            $cv->CvPdf = $StaffCvPdf;
        }
    
        $response['data'] = $staffSalary;
        return response()->json($response);
    }
    
    public function deleteStaffSalary(Request $request)
    {
        $data = $request->all();
        $userId = $data['userId'];

    // Use the StaffMember model to find and delete the staff member
        $staffSalary = staffSalary::find($userId);

        if (!$staffSalary) {
            return response()->json(['message' => 'Staff member not found'], 404);
        }

        $staffSalary->delete();

        return response()->json(['message' => 'Staff member deleted'], 200);
     
        }
    // 
    // storeStaffSalary
    //
}
