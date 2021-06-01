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
}
