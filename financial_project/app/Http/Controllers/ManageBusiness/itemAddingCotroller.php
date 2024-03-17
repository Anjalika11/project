<?php

namespace App\Http\Controllers\ManageBusiness;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class itemAddingCotroller extends Controller
{
    public function index()
    {
        return view('Section.BusinessManage.itemAdding');
    }
}
