<?php

namespace App\Http\Controllers\ManageBusiness;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\BusinessDetails;
use App\Models\BusinessLogo;


class BusinessRegisterController extends Controller
{
    public function index()
    {
      
        return view('Section.BusinessManage.BusinessRegister');
       
    }
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
   
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|size:10',       

        ]);
        $BusinessDetails = BusinessDetails::create([
            'business_name' =>  $data['name'],
            'address' => $data['address'],
            'phone_number' =>  $data['phone'],
            'register_number' =>  $data['br'],
            'email' =>  $data['email'],
            'date_of_start' => $data['date'],
            'description' =>  $data['description'],
        
        ]);
        if ($request->hasFile('businessLogo')) {
            foreach ($request->file('businessLogo') as $index => $image) {
                $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                $image->move('img/Business/Logo', $imageName);

                $RegisterLogoImg = new BusinessLogo();
                $RegisterLogoImg->business_logos = $imageName;
                $RegisterLogoImg->Business_id = $BusinessDetails->id;
                $RegisterLogoImg->save();
            }
        }
    }


    public function getbusinessDetails()
    {
      
        $businessDetails = BusinessDetails::select('*')
        ->leftJoin('business_logos', 'business_logos.Business_id', '=', 'business_details.id')
        ->get();
    
    foreach ($businessDetails as $logo) {
        $businessLogo = BusinessLogo::where('Business_id', $logo->id)->get();
        $logo->businessLogo = $businessLogo;
    }
    
    $response['data'] = $businessDetails;
    return response()->json($response);
       
    }
    
}
