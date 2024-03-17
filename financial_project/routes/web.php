<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\manageloanController;
use App\Http\Controllers\allaplicantsController;
use App\Http\Controllers\approvedaplicantsController;
use App\Http\Controllers\rejectedaplicantsController;
use App\Http\Controllers\waitingaplicantsController;
use App\Http\Controllers\microLoanApplicantRegsterController;
use App\Http\Controllers\mortgageLoanApplicantRegsterController;
use App\Http\Controllers\otherLoanApplicantRegsterController;

use App\Http\Controllers\Verify\microVerifyApplicants;
use App\Http\Controllers\Verify\mortgageVerifyApplicants;
use App\Http\Controllers\Verify\otherVerifyApplicants;

use App\Http\Controllers\microLoanApprovelController;
use App\Http\Controllers\mortgageLoanApprovelController;
use App\Http\Controllers\otherLoanApprovelController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\loanController;

use App\Http\Controllers\paymentHistoryController;




use App\Http\Controllers\ProcessingLoanController\microProcessingLoanController;
use App\Http\Controllers\ProcessingLoanController\mortgageProcessingLoanController;
use App\Http\Controllers\ProcessingLoanController\otherProcessingLoanController;

use App\Http\Controllers\Report\totalExpencesController;
use App\Http\Controllers\Report\totalProfitandLostController;

use App\Http\Controllers\Report\Micro\dailyReportController;
use App\Http\Controllers\Report\Micro\monthlyReportController;
use App\Http\Controllers\Report\Micro\profitReportController;
use App\Http\Controllers\Applicants\allApplicantProfileController;

use App\Http\Controllers\Report\Mortgage\mortgageMonthlyReportController;
use App\Http\Controllers\Report\Mortgage\mortgageProfitReportController;
use App\Http\Controllers\Report\Mortgage\mortgageDailyReportController;

use App\Http\Controllers\Report\Other\otherDailyReportController;
use App\Http\Controllers\Report\Other\otherMonthlyReportController;
use App\Http\Controllers\Report\Other\otherProfitReportController;


use App\Http\Controllers\Report\branchReportController;

use App\Http\Controllers\PawnedGoods\otherController;
use App\Http\Controllers\PawnedGoods\properiesController;
use App\Http\Controllers\PawnedGoods\vehiclesController;

use App\Http\Controllers\ManageBusiness\branchController;

use App\Http\Controllers\Auth\signInController;

use App\Http\Controllers\ManageBusiness\userRegistrationBladeController;
use App\Http\Controllers\Other\otherALLController;

use App\Http\Controllers\ManageBusiness\Staff\adstaffController;
use App\Http\Controllers\ManageBusiness\Staff\manageStaffController;
use App\Http\Controllers\ManageBusiness\Staff\staffProfileController;
use App\Http\Controllers\ManageBusiness\Staff\staffSalaryController;
use App\Http\Controllers\ManageBusiness\BusinessRegisterController;
use App\Http\Controllers\ManageBusiness\companyController;  

use App\Http\Controllers\ManageBusiness\Staff\staffAttendanceController;
use App\Http\Controllers\ManageBusiness\itemAddingCotroller;

use App\Http\Controllers\Applicants\createAnotherMortgage ;

use App\Http\Controllers\Auction\auctiongoldController;  

use App\Http\Controllers\other\goldpricecontroller;


use App\Http\Controllers\HomeController;
/*
    

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('auth.userSignIn');
// });
Route::get('/',  [HomeController::class, 'index'])->name('home')->middleware('isLoggedIn');

// Routes for blade pages
Route::get('/manage-loan', [manageloanController::class, 'index'])->name('manage-loan')->middleware('isLoggedIn');
Route::get('/all-applicant', [allaplicantsController::class, 'index'])->name('all-applicant');
Route::get('/waiting-applicant', [waitingaplicantsController::class, 'index'])->name('waiting-applicant');
Route::get('/rejected-applicant', [rejectedaplicantsController::class, 'index'])->name('rejected-applicant');
Route::get('/approved-applicant', [approvedaplicantsController::class, 'index'])->name('approved-applicant');
Route::get('/register-micro-applicant', [microLoanApplicantRegsterController::class, 'index'])->name('register-micro-applicant');
Route::get('/register-mortgage-applicant', [mortgageLoanApplicantRegsterController::class, 'index'])->name('register-mortgage-applicant');
Route::get('/register-other-applicant', [otherLoanApplicantRegsterController::class, 'index'])->name('register-other-applicant');
Route::get('/verify-micro-applicant', [microVerifyApplicants::class, 'index'])->name('verify-micro-applicant');
Route::get('/verify-mortgage-applicant', [mortgageVerifyApplicants::class, 'index'])->name('verify-mortgage-applicant');
Route::get('/verify-other-applicant', [otherVerifyApplicants::class, 'index'])->name('verify-other-applicant');

Route::get('/micro-loan-approval', [microLoanApprovelController::class, 'index'])->name('micro-loan-approval');
Route::get('/mortgage-loan-approval', [mortgageLoanApprovelController::class, 'index'])->name('mortgage-loan-approval');
Route::get('/other-loan-approval', [otherLoanApprovelController::class, 'index'])->name('other-loan-approval');

Route::get('/micro-processing-loan', [microProcessingLoanController::class, 'index'])->name('micro-processing-loan');
Route::get('/mortgage-processing-loan', [mortgageProcessingLoanController::class, 'index'])->name('mortgage-processing-loan');
Route::get('/other-processing-loan', [otherProcessingLoanController::class, 'index'])->name('other-processing-loan');

Route::get('/total-expences-report', [totalExpencesController::class, 'index'])->name('total-expences-report');
Route::get('/total-profit-report', [totalProfitandLostController::class, 'index'])->name('total-profit-report');

Route::get('/micro-daily-report', [dailyReportController::class, 'index'])->name('micro-daily-report');
Route::get('/micro-monthly-report', [monthlyReportController::class, 'index'])->name('micro-monthly-report');
Route::get('/micro-profit-report', [profitReportController::class, 'index'])->name('micro-profit-report');

Route::get('/mortgage-daily-report', [mortgageDailyReportController::class, 'index'])->name('mortgage-daily-report');
Route::get('/mortgage-monthly-report', [mortgageMonthlyReportController::class, 'index'])->name('mortgage-monthly-report');
Route::get('/mortgage-profit-report', [mortgageProfitReportController::class, 'index'])->name('mortgage-profit-report');

Route::get('/other-daily-report', [otherDailyReportController::class, 'index'])->name('other-daily-report');
Route::get('/other-monthly-report', [otherMonthlyReportController::class, 'index'])->name('other-monthly-report');
Route::get('/other-profit-report', [otherProfitReportController::class, 'index'])->name('other-profit-report');


Route::get('/other-pawn-list', [otherController::class, 'index'])->name('other-pawn-list');
Route::get('/properies-pawn-list', [properiesController::class, 'index'])->name('properies-pawn-list');
Route::get('/vehicles-pawn-list', [vehiclesController::class, 'index'])->name('vehicles-pawn-list');


Route::get('/branch-register-before', [branchController::class, 'branchBeforeUserRegistration'])->name('branch-register-before');
Route::get('/user-registration-list', [userRegistrationBladeController::class, 'index'])->name('user-registration-list');

Route::get('/staff-registration-blade', [adstaffController::class, 'index'])->name('staff-registration-blade');
Route::get('/staff-manage-blade', [manageStaffController::class, 'index'])->name('staff-manage-blade');
Route::get('/staff-profile-blade', [staffProfileController::class, 'index'])->name('staff-profile-blade');
Route::get('/customer-profile-blade', [CustomerController::class, 'index'])->name('customer-profile-blade');
Route::get('/all-Applicant-Profile-Controller', [allApplicantProfileController::class, 'index'])->name('all-Applicant-Profile-Controller');



Route::get('/items-adding-blade', [itemAddingCotroller::class, 'index'])->name('items-adding-blade');

Route::get('/user-waiting', [otherALLController::class, 'userWaiting'])->name('user-waiting');

Route::get('/next-mortgage', [createAnotherMortgage::class, 'index'])->name('next-mortgage');

Route::get('/payment-history', [paymentHistoryController::class, 'index'])->name('payment-history');

Route::get('/branch-Report', [branchReportController::class, 'index'])->name('branch-Report');

Route::get('/branches', [branchController::class, 'index'])->name('branches');

Route::get('/branches-profile-blade', [branchController::class, 'branchProfile'])->name('branches-profile-blade');

Route::get('/business-register', [BusinessRegisterController::class, 'index'])->name('business-register');

Route::get('/auction-gold', [auctiongoldController::class, 'index'])->name('auction-gold');



Route::get('/gold-price', [goldpricecontroller::class, 'index'])->name('gold-price');



Auth::routes();
// End Routes for blade pages
// Branch registration before user registration

// This route handles the branch registration form submission
Route::post('/branch-register-before', [BranchController::class, 'store'])->name('branch-register-before.store');

//***********************************Auth Routes*******************************************/
Route::post('/user-login', [signInController::class, 'userlogin'])->name('user-login');

Route::get('/user-login', function () {
    return view('Auth.login');
})->name('user-login');

Route::get('/logout-user', [signInController::class, 'logout'])->name('logout-user');

//GET DATA TO TABLES**************************** 
Route::get('/get-user-list', [signInController::class, 'getUserList'])->name('get-user-list');
Route::get('/get-staff-list', [manageStaffController::class, 'getStaffList'])->name('get-staff-list');
Route::get('/get-staff-attendence/{id}', [staffAttendanceController::class, 'getStaffAttendence'])->name('get-staff-attendence');
Route::get('/get-staff-total-salary', [staffSalaryController::class, 'getStaffTotalSalary'])->name('get-staff-total-salary');
Route::get('/get-staff-salary/{id}', [staffSalaryController::class, 'getStaffSalary'])->name('get-staff-salary');
Route::post('/get-each-daily-attendence', [staffAttendanceController::class, 'getStaffEachDailyAttendence'])->name('get-each-daily-attendence');
Route::get('/getMicroUserDetails', [microVerifyApplicants::class, 'getMicroUserDetails'])->name('getMicroUserDetails');
Route::get('/get-mortgage-costomer-details', [mortgageVerifyApplicants::class, 'getMortgageCostomerDetails'])->name('get-mortgage-costomer-details');
Route::get('/get-mortgage-verify-costomer-details', [mortgageLoanApprovelController::class, 'getMortgageVerifiedCostomerDetails'])->name('get-mortgage-verify-costomer-details');
Route::get('/get-micro-verify-costomer-details', [microLoanApprovelController::class, 'getMicroVerifiedCostomerDetails'])->name('get-micro-verify-costomer-details');
Route::get('/get-ongoing-micro-Loan', [microProcessingLoanController::class, 'getOngoingLoan'])->name('get-ongoing-micro-Loan');
Route::get('/get-ongoing-mortgage-Loan', [mortgageProcessingLoanController::class, 'getOngoingLoan'])->name('get-ongoing-mortgage-Loan');
Route::get('/get-completed-mortagage-Loan', [mortgageProcessingLoanController::class, 'getCompletedMortagageLoan'])->name('get-completed-mortagage-Loan');
Route::get('/get-overdue-mortgage-Loan', [mortgageProcessingLoanController::class, 'getOverdueMortagageLoan'])->name('get-overdue-mortgage-Loan');
Route::get('/get-completed-micro-Loan', [microProcessingLoanController::class, 'getCompletedMicroLoan'])->name('get-completed-micro-Loan');
Route::get('/get-completed-mortgage-Loan', [mortgageProcessingLoanController::class, 'getCompletedMortgageLoan'])->name('get-completed-mortgage-Loan');
Route::get('/get-overdue-micro-Loan', [microProcessingLoanController::class, 'getOverdueMicroLoan'])->name('get-overdue-micro-Loan');
Route::get('/get-micro-Loan-daily-collect-report', [dailyReportController::class, 'getMicroLoanDailyCollectReport'])->name('get-micro-Loan-daily-collect-report');
Route::get('/get-micro-Loan-daily-report', [dailyReportController::class, 'getMicroLoanDailyReport'])->name('get-micro-Loan-daily-report');

Route::get('/get-mortgage-Loan-daily-report', [mortgageDailyReportController::class, 'getMortgageLoanDailyReport'])->name('get-mortgage-Loan-daily-report');

Route::post('/getDailyReport-PaidCustomer', [dailyReportController::class, 'getDailyReportPaidCustomer'])->name('getDailyReport-PaidCustomer');
Route::post('/getDailyReport-PaidCustomer-mortgage', [mortgageDailyReportController::class, 'getDailyReportPaidCustomer'])->name('getDailyReport-PaidCustomer-mortgage');


Route::post('/getDailyCollectionReport-PaidCustomer', [dailyReportController::class, 'getDailyCollectionReportPaidCustomer'])->name('getDailyCollectionReport-PaidCustomer');
Route::get('/get-micro-Loan-all-report', [dailyReportController::class, 'getallmicroLoanDetails'])->name('get-micro-Loan-all-report');
Route::get('/get-micro-monthly-report', [monthlyReportController::class, 'getallmicroLoanMonthlyReport'])->name('get-micro-monthly-report');
Route::post('/get-moonthly-micro-Report-bycase', [monthlyReportController::class, 'getTotalMicroMonthlyReportbyCase'])->name('get-moonthly-micro-Report-bycase');
Route::post('/get-issued-capital-byMonthly', [monthlyReportController::class, 'getIssuedCapitalByMonthly'])->name('get-issued-capital-byMonthly');
Route::get('/get-Mortgage-Monthly-Reprt', [mortgageMonthlyReportController::class, 'getMortgageMonthlyReprt'])->name('get-Mortgage-Monthly-Reprt');
Route::post('/get-paied-amount-mortgage-monthly-report', [mortgageMonthlyReportController::class, 'getTotalMortgageMonthlyReportbyCase'])->name('get-paied-amount-mortgage-monthly-report');
Route::post('/get-mortgage-capital-issued-monthly', [mortgageMonthlyReportController::class, 'getIssuedMortgageCapitalByMonthly'])->name('get-mortgage-capital-issued-monthly');

Route::get('/get-mortgage-Loan-all-report', [mortgageProfitReportController::class, 'getallMortgageLoanDetails'])->name('get-mortgage-Loan-all-report');
Route::post('/loans-checkstatus', [loanController::class, 'loaneStatus'])->name('loans-checkstatus');

Route::get('/getallApplicantsDetails', [allaplicantsController::class, 'getallApplicantsDetails'])->name('getallApplicantsDetails');
Route::get('/get-costomer-Loan/{id}', [allApplicantProfileController::class, 'getCostomerLoan'])->name('get-costomer-Loan');

Route::get('/get-complete-costomer-Loan/{id}', [allApplicantProfileController::class, 'getCostomerCompleteLoan'])->name('get-complete-costomer-Loan');


Route::get('/get-branch-loan', [branchReportController::class, 'getBranchReprt'])->name('get-branch-loan');

Route::get('/get-branch-details', [branchController::class, 'getBranches'])->name('get-branch-details');

Route::get('/get-branch-micro-Loan/{id}', [branchController::class, 'getmicroLoanByBranch'])->name('get-branch-micro-Loan');

Route::get('/get-branch-mortgage-Loan/{id}', [branchController::class, 'getMortgageLoanByBranch'])->name('get-branch-mortgage-Loan');

Route::get('/get-Mortgage-Monthly-Reprt-bybranch/{id}', [branchController::class, 'getMortgageMonthlyReprtbybranch'])->name('get-Mortgage-Monthly-Reprt-bybranch');

Route::post('/get-paied-amount-monthly-report-bybranch', [branchController::class, 'getpaiedAmountMonthlybybranch'])->name('get-paied-amount-monthly-report-bybranch');

Route::post('/get-capital-issued-monthly-bybranch', [branchController::class, 'getissuedAmountMonthlybybranch'])->name('get-capital-issued-monthly-bybranch');


Route::get('/get-staff-list-byBranch/{id}', [branchController::class, 'getStaffListbybranch'])->name('get-staff-list-byBranch');

Route::get('/getgoldmortgagelist', [otherController::class, 'getgoldmortgagelist'])->name('getgoldmortgagelist');

Route::get('/getOverduegoldmortgagelist', [otherController::class, 'getOverduegoldmortgagelist'])->name('getOverduegoldmortgagelist');



Route::get('/getVehiclemortgagelist', [vehiclesController::class, 'getVehiclemortgagelist'])->name('getVehiclemortgagelist');

Route::get('/getPropertiesmortgagelist', [properiesController::class, 'getPropertiesmortgagelist'])->name('getPropertiesmortgagelist');


Route::get('/getdevicesmortgagelist', [otherController::class, 'getdevicesmortgagelist'])->name('getdevicesmortgagelist');

Route::get('/get-business-details', [BusinessRegisterController::class, 'getbusinessDetails'])->name('get-business-details');

Route::get('/get-auction-gold-Loan', [auctiongoldController::class, 'getAuctionGoldLoan'])->name('get-auction-gold-Loan');

Route::get('/get-auction-gold-complete-Loan', [auctiongoldController::class, 'getAuctionGoldCompleteLoan'])->name('get-auction-gold-complete-Loan');


//GET DATA TO FORMS**************************** 
Route::get('/loan-detail/{id}', [loanController::class, 'loanDetail'])->name('loan.detail');
Route::get('/loan-history-bycustomer/{id}', [paymentHistoryController::class, 'loanDetail'])->name('loan-history-bycustomer');



#Edit  data************************************** 
Route::post('/edit-user-status', [signInController::class, 'editStatus'])->name('edit-user-status');
Route::post('/update.staff-Member', [adstaffController::class, 'updateStaffMember'])->name('update.staff-Member');
Route::post('/edit.customer', [CustomerController::class, 'updateCustomer'])->name('edit.customer');
Route::post('/update.branch-Details', [branchController::class, 'updateBranchDetails'])->name('update.branch-Details');
Route::post('/editGoldStatus', [otherController::class, 'editGoldStatus'])->name('editGoldStatus');


#store  data*************************************
Route::post('/store.loan', [manageloanController::class, 'storeLoan'])->name('store.loan');
Route::post('/store.jobRole', [companyController::class, 'storejobRole'])->name('store.jobRole');
Route::post('/store.staff-Member', [adstaffController::class, 'storeStaffMember'])->name('store.staff-Member');
Route::post('/store.staff-salary', [staffSalaryController::class, 'storeStaffSalary'])->name('store.staff-salary');
Route::post('/store.micoLoan-customer', [microLoanApplicantRegsterController::class, 'storeMicroLoanCustomer'])->name('store.micoLoan-customer');
Route::post('/store.mortgage-customer', [mortgageLoanApplicantRegsterController::class, 'storeMortgageLoanCustomer'])->name('store.mortgage-customer');
Route::post('/store.next-mortgage-customer', [createAnotherMortgage::class, 'storeMortgageLoan'])->name('store.next-mortgage-customer');

Route::post('/penalty-store', [loanController::class, 'penaltyStore'])->name('penalty-store');
Route::post('/store.staff-attendence', [staffAttendanceController::class, 'storeStaffAttendance'])->name('store.staff-attendence');
Route::post('/loans-store', [loanController::class, 'storeLoan'])->name('loans-store');
Route::post('/loans-store-again', [allApplicantProfileController::class, 'storeLoan'])->name('loans-store-again');


Route::post('/loans/addpayment/{id}', [loanController::class, 'storePayment'])->name('store.payment');
Route::post('/completLoan', [loanController::class, 'completLoan'])->name('completLoan');

Route::post('/store.business', [BusinessRegisterController::class, 'store'])->name('store.business');


// Delte Data************************************
Route::post('/delete-staff-member', [adstaffController::class, 'deleteStaffMember'])->name('delete-staff-member');
Route::post('/delete-staff-salary', [staffSalaryController::class, 'deleteStaffSalary'])->name('delete-staff-salary');
Route::post('/delete.customer', [CustomerController::class, 'deleteCustomer'])->name('delete.customer');
Route::post('/paymentHistory-delete', [paymentHistoryController::class, 'deletepayment'])->name('paymentHistory-delete');




// Do Customers Edit and other task************************************
Route::post('/verify-costomer', [CustomerController::class, 'verifyCostomer'])->name('verify-costomer');


Route::get('/setupLoanForm/{id}', [mortgageLoanApprovelController::class, 'setupLoanForm']);
Route::get('/loanType', [manageloanController::class, 'loanType']);
Route::post('/loanType-details', [manageloanController::class, 'loanTypedetails']);







