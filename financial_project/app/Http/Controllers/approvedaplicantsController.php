<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class approvedaplicantsController extends Controller
{
    public function index()
    {
        return view('Section.ApplicantsList.approvedApplicants');
    }
}
