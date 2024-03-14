<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\district;
use App\Models\blood;
use App\Models\donor;

class BloodController extends Controller
{
    public function Request(){
        $get_district = district::where('is_deleted',0)->where('status',0)->get();
      

        return view('donor.BloodRequestPage')->with(['district'=>$get_district]);
        
    }
    public function Blood_Request(){
        
        $get_request = blood::where('status',0)->get();

        return view('admin.BloodRequestPage')->with(['blood'=>$get_request]);
    }
   public function StoreBloodRequest(Request $request) {
        
    $validated = $request->validate([
        'name' => 'required',
        'bloodgroup' => 'required',
        'mobile_no' =>  'required|min:10|max:10',
        'address'   => 'required'
    ]);
    
    $track_id =  rand(10,100000).date('ymisd');
    

       $blood_store = new blood();
       $blood_store->bloodgroup = $request->bloodgroup;
       $blood_store->district_id = $request->district_id;
       $blood_store->name = $request->name;
       $blood_store->mobile_no = $request->mobile_no;
       $blood_store->address = $request->address;
       $blood_store->track_id = $track_id;
       $blood_store->save();
    
       $donor_count = donor::where('district_id',$request->district_id)
       ->where('bloodgroup',$request->bloodgroup)->where('status',1)->count();

       return redirect('request_page')->with('success',$donor_count.' donor was found,
       you can receive more details once admin has approved.
        You can track your request by following track id :'.$track_id);

   }
   public function DonorAvailable(){
    return view('Donor.DonorAvailablePage');
   }
   public function EditBloodRequest($id){
     $get_blood_detail = blood::where('id',$id)->first();
    $get_blood_detail->status=1;
    $get_blood_detail->update();

    return redirect('blood_page');
   }
   public function checkStatus(Request $request){
   
      $checkstatus = blood::where('track_id',$request->track_id)->first();
    
      if (!$checkstatus) {
         return redirect('donor_available_page')->with('error','Invalid Track Id');
      }
      else  if($checkstatus->status == 0) {
       return redirect('donor_available_page')->with('error','Your request is still  pending... Please wait');
      }
      else {
        $listDonor = donor::where('district_id',$checkstatus->district_id)
        ->where('bloodgroup',$checkstatus->bloodgroup)->where('is_deleted',0)->get();
     
        return view('Donor.DonorCheckList')->with(['donorlist'=>$listDonor]);
      }
   }
}
