<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\merchant;
use App\items;
use Hash;
use Redirect;
use Validator;
use DateTime;

class ItemsController extends Controller
{

	/* Get all items for donation */
    function getItems(Request $r)
    {
    	$array = $r->input();

    	$items = merchant::join('items', 'items.merchantName', '=', 'merchant.merchantName')
    				->select('merchant.merchantName', 'merchant.merchantImage', 'merchant.contactPerson', 'merchant.contactNumber', 'merchant.contactEmail', 'merchant.merchantAddress', 'items.itemName', 'items.itemCount', 'items.itemType', 'items.expiryDate');

    				if(array_key_exists("merchant_name", $array)){
    					if($array["merchant_name"] != "")
    					$items->where('merchant.merchantName', '=', $array['merchant_name']);
    				}

    				if(array_key_exists("item_category", $array)){
    					if($array["item_category"] != "")
    					$items->where('items.itemType', '=', $array['item_category']);
    				}
    				
    				return $items->get();

    }

    /* Get all items of merchant */
    function getMerchItems(Request $r)
    {
    	$email = $r->input('email');

    	$items = merchant::join('items', 'items.merchantName', '=', 'merchant.merchantName')
    				->select('merchant.merchantName', 'merchant.merchantImage', 'merchant.contactPerson', 'merchant.contactNumber', 'merchant.contactEmail', 'merchant.merchantAddress', 'items.itemName', 'items.itemCount', 'items.itemType', 'items.expiryDate')
    				->where('merchant.contactEmail', '=', $email);

    	return $items->get();
    }

}//end_of_ItemsController
