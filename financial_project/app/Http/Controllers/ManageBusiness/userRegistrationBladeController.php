<?php

namespace App\Http\Controllers\ManageBusiness;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\branches;


class userRegistrationBladeController extends Controller
{
    public function index()
    {
        
        $branches = branches::all(); // Fetch all branch records
        return view('BusinessManage.userRegistrationList', compact('branches'));
        
    }
}
