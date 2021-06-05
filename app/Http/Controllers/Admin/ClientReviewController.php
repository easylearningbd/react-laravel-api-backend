<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientReview;

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
    }



}
  