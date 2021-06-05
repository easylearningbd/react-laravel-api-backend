<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function onSelectAll(){

    	$result = Footer::all();
    	return $result;

    } // end mehtod 


    public function AllFooterContent(){
    	$footer = Footer::all();
    	return view('backend.footer.all_footer',compact('footer'));
    } // end mehtod 




}
