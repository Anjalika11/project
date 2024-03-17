<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\loanType;
use App\Models\LoanPayment;
use App\Models\LoanPenalty;
use App\Models\PaymentHistory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $capitalAmount =Loan::sum('maximum_amount');
        $collectedAmount =PaymentHistory::sum('payment');
        $collectedInterestAmount =PaymentHistory::where('category_of_payment','Interest amount only')->sum('payment');
        $different =number_format(($collectedAmount-$capitalAmount), 2, '.', ',');

        $formattedCapitalAmount = number_format($capitalAmount, 2, '.', ',');
        $formattedcollectedAmount = number_format($collectedAmount, 2, '.', ',');
        $formattedcollectedInterestAmount = number_format($collectedInterestAmount, 2, '.', ',');

        return view('welcome', [
            'capitalAmount'=> $formattedCapitalAmount,
            'collectedAmount'=>$formattedcollectedAmount,
            'collectedInterestAmount'=>$formattedcollectedInterestAmount,
            'different'=> $different
        ]);
    }
}
