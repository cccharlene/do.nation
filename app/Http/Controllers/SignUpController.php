<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\merchant;

class SignUpController extends Controller
{
    //

    public function signup (Request $request){
    	
    	$newUser = new merchant();
		// $newUser->id = $request->input('id');
		$newUser->merchantName = $request->input('merchantName');
		$newUser->merchantAddress = $request->input('merchantAddress');
		// $newUser->password = Hash::make($request->input('password'));
		// $newUser->mobile_number = Crypt::encrypt($request->input('mobile_number'));
		$newUser->merchantImage = $request->input('merchantImage');
		$newUser->contactPerson = $request->input('contactPerson');
		$newUser->contactNumber = $request->input('contactNumber');		
		$newUser->contactEmail = $request->input('contactEmail');		
	
		$newUser->save();
    }

     
    
}
