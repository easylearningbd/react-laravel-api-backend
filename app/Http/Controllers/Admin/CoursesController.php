<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;

class CoursesController extends Controller
{
    public function onSelectFour(){
    	$result = Courses::limit(4)->get();
    	return $result;
    } // end mehtod 


 public function onSelectAll(){
 	$result = Courses::all();
    	return $result;

    } // end mehtod 

    public function OnSelectDetails(Request $request){

    	$id = $request->input('id');
    	$result = Courses::where('id',$id)->get();
    	return $result;

    } // end method 


} 
