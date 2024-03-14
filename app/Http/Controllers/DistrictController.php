<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\district;

class DistrictController extends Controller
{
    public function Districts(){
        $get_district = district::where('is_deleted',0)->where('status',0)->get();

        return view('admin.Districts')->with(['district'=>$get_district]);
    }
    public function Create_Districts(){
        return view('admin.CreateDistrictPage');
    }

    public function Districtstore(Request $request) {
        $district_store= new district();
        $district_store->district_name = $request->district_name;
        $district_store->district_code = $request->district_code;
        $district_store->save();
        return redirect('districts_page');
    }
}
