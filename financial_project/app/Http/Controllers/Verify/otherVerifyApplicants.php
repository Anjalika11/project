<?php

namespace App\Http\Controllers\Verify;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class otherVerifyApplicants extends Controller
{
    public function index()
    {
        return view('Section.VerifyApplicants.otherVerifyApplicants');
    }
}
