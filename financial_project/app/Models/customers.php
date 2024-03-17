<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;
    protected $fillable = [
        'loanID',
        'fullname',
        'address',
        'contactNumber',
        'contactNumberFixed',
        'gender',
        'nic',
        'email',
        'account_no',
        'bankName',
        'branchname',
        'incomeSource',
        'monthlygrossincome',
        'monthlyExpenses',
        'detailspreviousloans',
        'loanType',
        'requestedAmount',
        'paymentMethod',
        'loanStatus',
        'mortgage_type',
        'mortgage_sub_type',
        'branch_id',
        'collector_id'
    ];
}
