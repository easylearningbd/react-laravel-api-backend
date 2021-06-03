<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class ServiceController extends Controller
{
    public function ServiceView(){

    	$services = Services::latest()->get();
    	return $services;

    } // end method 


    public function AllService(){
    	$service = Services::all();
    	return view('backend.service.all_service',compact('service'));
    } // end method 

   
}
