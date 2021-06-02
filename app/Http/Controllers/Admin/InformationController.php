<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
     public function onSelectAll(){

    	$result = Information::all();
    	return $result;

    } // end mehtod 


    public function AllInformation(){
    	$result = Information::all();
    	return view('backend.information.all_information',compact('result'));
    } // end method 



    public function AddInformation(){
    	return view('backend.information.add_information');
    } // end method 


    public function StoreInformation(Request $request){
      
       Information::insert([
       	'about' => $request->about,
       	'refund' => $request->refund,
       	'trems' => $request->trems,
       	'privacy' => $request->privacy,

       ]);
       $notification = array(
    		'message' => 'Information Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('all.information')->with($notification);

    } // end method 


}
 