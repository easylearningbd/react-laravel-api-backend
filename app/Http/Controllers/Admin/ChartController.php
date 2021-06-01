<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chart;

class ChartController extends Controller
{
    public function onAllSelect(){
    	$result = Chart::all();
    	return $result;

    } // end method 


}
 