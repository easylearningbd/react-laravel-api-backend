<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AdminUserController extends Controller
{
    public function AdminLogout(){
    	Auth::logout();
    	return Redirect()->route('login');

    } // end mehtod 


    public function UserProfile(){
    	$id = Auth::user()->id;
    	$user = User::find($id);

    	return view('backend.user.user_profile',compact('user'));

    } // en mehtod 




}
 