<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class waitingaplicantsController extends Controller
{
    public function index()
    {
        return view('Section.ApplicantsList.waitingApplicants');
    }
}
