<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donor;
use App\Models\blood;


class HomeController extends Controller
{
    
    public function index()
    { $pedingRequest = blood::where('status',0)->count();
        $pendingDonors = donor::where('status',0)->where('is_deleted',0)->count();
        $totalDonors   = donor::where('status',1)->where('is_deleted',0)->count();
        $totalRequest  = blood::where('status',0)->count();
        $thisMonthDonor = donor::whereMonth('created_at',date('m'))->whereYear('created_at',date('Y'))->count();
        $thisMonthRequest = blood::whereMonth('created_at',date('m'))->whereYear('created_at',date('Y'))->count();
         
         
        
        
          return view('admin.DashboardPage')->with(['PendingRequest'=>$pedingRequest,'PendingDonor'=>$pendingDonors,
      'TotalDonors'=>$totalDonors,'TotalRequest'=>$totalRequest,'ThisMonthDonor'=>$thisMonthDonor,
      'ThisMonthRequest'=>$thisMonthRequest]);
    
       
    }
    public function Login(){
        return view('auth.login');
    }
    public function Navbar(){
        return view('donor.navbar');
    }
    public function Landing(){
        return view('donor.LandingPage');
    }
   
}
