<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientReview;
use Image;

class ClientReviewController extends Controller
{
     public function onAllSelect(){
    	$result = ClientReview::all();
    	return $result;

    } // end method 

    public function AllReview(){
    	$review = ClientReview::all();
    	return view('backend.review.all_review',compact('review'));
    } // end method 


    public function AddReview(){
    	return view('backend.review.add_review');
    } // end method 


    public function StoreReview(Request $request){

         $request->validate([
    		'client_title' => 'required',
    		'client_description' => 'required',
    		'client_img' => 'required',
    	],[
			'client_title.required' => 'Input Client Name',
			'client_description.required' => 'Input Client Description',

    	]);

    	$image = $request->file('client_img'); 
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(626,417)->save('upload/review/'.$name_gen);
    	$save_url = 'http://127.0.0.1:8000/upload/review/'.$name_gen;

    	ClientReview::insert([
    		'client_title' => $request->client_title,
    		'client_description' => $request->client_description,
    		'client_img' => $save_url,
    	]);

    	 $notification = array(
    		'message' => 'Review Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('all.review')->with($notification);
    } // end method 


    public function EditReview($id){

    	$review = ClientReview::findOrFail($id);
    	return view('backend.review.edit_review',compact('review'));

    } // end method 


    public function UpdateReview(Request $request){

    	$review_id = $request->id;

    	if ($request->file('client_img')) {

    	$image = $request->file('client_img'); 
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(626,417)->save('upload/review/'.$name_gen);
    	$save_url = 'http://127.0.0.1:8000/upload/review/'.$name_gen;

    	ClientReview::findOrFail($review_id)->update([

    		'client_title' => $request->client_title,
    		'client_description' => $request->client_description,
    		'client_img' => $save_url,
    	]);

    	 $notification = array(
    		'message' => 'Review Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('all.review')->with($notification);
    		 

    	}else{

    		ClientReview::findOrFail($review_id)->update([

    		'client_title' => $request->client_title,
    		'client_description' => $request->client_description,
    		 
    	]);

    	 $notification = array(
    		'message' => 'Review Updated Without Image Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('all.review')->with($notification);
    	}

    } // end method 


    public function DeleteReview($id){

    	ClientReview::findOrFail($id)->delete();

    	$notification = array(
    		'message' => 'Review Delected Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->back()->with($notification);

    } // end method 


}
  