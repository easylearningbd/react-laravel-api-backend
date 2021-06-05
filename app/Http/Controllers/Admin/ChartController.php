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


    public function AllChartContent(){
        $chart = Chart::all();
    	return view('backend.chart.all_chart',compact('chart'));
    } // end method 


    public function EditChartContent($id){
    	$chart = Chart::findOrFail($id);
    	return view('backend.chart.edit_chart',compact('chart'));

    } // end method 


    public function UpdateChartContent(Request $request){

    		$chart_id = $request->id;

    	Chart::findOrFail($chart_id)->update([

    		'Techonology' => $request->Techonology,
    		'Projects' => $request->Projects,
    		 
    		 
    	]);

    	 $notification = array(
    		'message' => 'Chart Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('all.chart.content')->with($notification);

    } // end method 

}
 