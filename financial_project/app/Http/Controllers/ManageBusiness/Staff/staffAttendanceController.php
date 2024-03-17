<?php

namespace App\Http\Controllers\ManageBusiness\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\staffAttendance;
use App\Models\RegisterStaffMembers;
use App\Models\RegisterStaffMembersCvImg;
use App\Models\RegisterStaffMembersProfileImg;
class staffAttendanceController extends Controller

{
    //
    public function storeStaffAttendance(Request $request){
        $data = $request->all();

        $request->validate([
            'userId' => 'required|numeric|max:255',
            'attendence_date' => 'required|date',
            'arrival_time' => 'required',
            'departure_time' => 'required',
        ]);

        $staffSalary = staffAttendance::create([
            'staff_id' =>  $data['userId'],
            'arrival' => $data['arrival_time'],
            'departure' =>  $data['departure_time'],
            'attend' =>  1,
            'date' =>  $data['attendence_date'],          
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'success'
        ]);
    }
    public function getStaffAttendence($id){
        $staffAttendance = staffAttendance::selectRaw('
        staff_attendances.staff_id,
        register_staff_members.name,
        DATE_FORMAT(staff_attendances.date, "%Y-%m") as month_year,
        SUM(staff_attendances.attend) as total_attendance'
    )
    ->leftJoin('register_staff_members', 'staff_attendances.staff_id', '=', 'register_staff_members.id')
    ->where('staff_attendances.staff_id', '=', $id)
    ->groupBy('staff_attendances.staff_id', 'month_year' ,'register_staff_members.name') // Remove 'register_staff_members.name' from the group by
    ->get();
    
        foreach ($staffAttendance as $propic) {
            $propicImages = RegisterStaffMembersProfileImg::where('staff_id', $propic->staff_id)->get();
            $propic->proImages = $propicImages;
        }
        foreach ($staffAttendance as $cv) {
            $StaffCvPdf = RegisterStaffMembersCvImg::where('staff_id', $cv->staff_id)->get();
            $cv->CvPdf = $StaffCvPdf;
        }
    
        $response['data'] = $staffAttendance;
        return response()->json($response);

      
    }
    public function getStaffEachDailyAttendence(Request $request){
        $Attendid = $request->input('Attendid');
        $attedence = staffAttendance::where('staff_id','=',$Attendid)->get();
        return response()->json(['data' => $attedence]);
    }
    
    
    
}
