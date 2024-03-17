<?php

namespace App\Http\Controllers\ManageBusiness;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jobRole;
class companyController extends Controller
{
    public function storejobRole(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'newJobRole' => 'required|string|max:255',
           

        ]);
        jobRole::create([
            'job_role' =>  $data['newJobRole'],
            'job_description' => $data['jobDescriptionText'],
        
        ]);
    }
}
