<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rejectedaplicantsController extends Controller
{
    public function index()
    {
        return view('Section.ApplicantsList.rejectedApplicants');
    }
}
