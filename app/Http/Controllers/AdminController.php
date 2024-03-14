<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donor;
use App\Models\blood;

class AdminController extends Controller
{
    
    public function Donor_list(){
        $get_donor_list = donor::where('is_deleted',0)->where('status',1)->get();
        return view('admin.DonorListPage')->with(['donorList'=>$get_donor_list]);
    }
    public function Complete_lists(){
        $get_blood_list = blood::where('status',1)->get();
        return view('admin.CompleteBloodRequest')->with(['bloodList'=>$get_blood_list]);
        
    }
    
}
