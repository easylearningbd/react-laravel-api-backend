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
}
 