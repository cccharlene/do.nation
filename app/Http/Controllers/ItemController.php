<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\item;

class ItemController extends Controller
{
    //
    public function addItem (Request $request){
    	
    	$newItem = new item();
		// $newUser->id = $request->input('id');
		$newItem->merchantName = $request->input('merchantName');
		$newItem->itemName = $request->input('itemName');
		// $newUser->password = Hash::make($request->input('password'));
		// $newUser->mobile_number = Crypt::encrypt($request->input('mobile_number'));
		$newItem->itemType = $request->input('itemType');
		$newItem->itemCount = $request->input('itemCount');
		$newItem->itemStatus = $request->input('itemStatus');		
		$newItem->itemImage = $request->input('itemImage');		
		$newItem->expiryDate = $request->input('expiryDate');		
		
		$newItem->save();
    }
}
