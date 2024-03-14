<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\district;
use App\Models\donor;
class DonorController extends Controller
{
    public function Register(){
       $get_district = district::where('is_deleted',0)->where('status',0)->get();
      

        return view('donor.DonerRegisterPage')->with(['district'=>$get_district]);
        
    }
    public function Donor_Request(){
        $get_donor = donor::where('is_deleted',0)->where('status',0)->get();

        return view('admin.DonorRequestPage')->with(['donor'=>$get_donor]);
    }
    public function StoreDonorRequest(Request $request){
       
        $validated = $request->validate([
            'donor_name' => 'required',
            'donor_dob' => 'required|date|before:-18 years',
            'mobile_no' => 'required|min:10|max:10',
            'image'     => 'required|mimes:jpeg,png,jpg,gif,svg'
        ]);

       if ($request->image) {
        $image_storing = substr(md5(mt_rand()),0,7).$request->file('image')->getClientOriginalName();
        $request->image->move(public_path('image'),$image_storing);
       }

        $donor_store = new donor();
        $donor_store->donor_name =  $request->donor_name;
        $donor_store->donor_dob  =  $request->donor_dob;
        $donor_store->bloodgroup =  $request->bloodgroup;
        $donor_store->gender     =  $request->gender;
        $donor_store->mobile_no  =  $request->mobile_no;
        $donor_store->address    =  $request->address;
        $donor_store->district_id =  $request->district_id;
        $donor_store->image       = $image_storing;
        $donor_store->save();
        return redirect('register_page');

    }
    public function Edit_donor($id){
        $get_district = district::where('is_deleted',0)->where('status',0)->get();

        $donor = donor::where('is_deleted',0)->where('id',$id)->where('status',0)->first();
        

        return view('admin.Edit_donor')->with(['donor'=>$donor,'district'=>$get_district]);
    }

    public function EditDonorstore(Request $request) {
        if ($request->image) {
            $image_storing = substr(md5(mt_rand()),0,7).$request->file('image')->getClientOriginalName();
            $request->image->move(public_path('image'),$image_storing);
        }

        $donor_store_edit = donor::where("id",$request->id)->first();

        if ($request->file('image_storing')) {
            $donor_store_edit->image = $image_storing;
        }

        $donor_store_edit->donor_name =  $request->donor_name;
        $donor_store_edit->donor_dob  =  $request->donor_dob;
        $donor_store_edit->bloodgroup =  $request->bloodgroup;
        $donor_store_edit->gender     =  $request->gender;
        $donor_store_edit->mobile_no  =  $request->mobile_no;
        $donor_store_edit->address    =  $request->address;
        $donor_store_edit->district_id =  $request->district_id;
        $donor_store_edit->update();

        return redirect('donor_page');
    }
    public function AcceptDonor($id) {
        $get_donor_detail = donor::where('id',$id)->first();
        $get_donor_detail->status=1;
        $get_donor_detail->update();
    
        return redirect('donor_page');
    }
}
