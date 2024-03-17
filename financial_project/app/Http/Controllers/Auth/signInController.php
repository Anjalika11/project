<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\branches;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class signInController extends Controller
{
    public function userlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|max:255|email',
            'password' => 'required|string|max:255',
           
        ]);
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user(); // Get the authenticated user
            $branch = branches::where('id', $user->branch_id)->first();
            // Store user's name and id in the session
            Session::put('user_name', $user->name);
            Session::put('status', $user->status);
            Session::put('user_id', $user->id);
            Session::put('role', $user->role);
            if ($branch) {
                Session::put('user_branch', $branch->branch_name);
                Session::put('branch_id', $branch->id);
            } else {
                Session::put('user_branch', 'Main Branch');
            }
            // Authentication was successful
            return redirect('/'); 
        } else {
            // Authentication failed
            return back()->withErrors(['email' => 'Invalid credentials']); 
        }
        
    }
    public function logout()
    { 
        if(Session::has('user_name')){
            Session::forget(['user_name', 'user_id', 'user_branch','status','branch_id','role']);
        }
        return redirect('login');
    }

    public function getUserList()
    { 
        $loanDetails = User::leftJoin('branches','users.branch_id','=','branches.id')->get();

        // Loop through the results and format the created_at column as a date
        $loanDetails->transform(function ($user) {
            $user->created_at = $user->created_at->format('Y-m-d');
            return $user;
        });
        
        $response['data'] = $loanDetails;
        return response()->json($response);
    }

    public function editStatus(Request $request){
        
        $status = (int)$request->status;
        $userid = (int)$request->userid;
       
        $user = User::where('id', $userid)->first(); // Replace $userId with the actual user's ID
        dd($status);
        if ($user) {
            $user->status = $status;
            $user->save();
    
            // Optionally, you can return a response indicating the update was successful.
            return response()->json(['message' => 'Status updated successfully']);
        } else {
            // Handle the case where the user with the given ID was not found.
            return response()->json(['message' => 'User not found'], 404);
        }
    }
    

    
}
