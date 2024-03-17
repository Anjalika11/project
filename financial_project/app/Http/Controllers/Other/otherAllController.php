<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class otherAllController extends Controller
{
    
    public function userWaiting()
    {
        return view('Section.OtherPages.userWaiting');
    }
}
