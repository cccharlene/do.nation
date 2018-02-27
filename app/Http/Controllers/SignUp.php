<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Response;
use App\merchant;
use App\items;
use App\App_user;
use Hash;
use Redirect;
use Validator;
use DateTime;

class SignUp extends Controller
{

    // Get user's role : merchant or beneficiary
    function checkRole($email)
    {

        $result = app_user::select('role')->where('email', '=', $email)->first();

        return $result->role;
    }

    //sign up for new users : default for now is beneficiaries
    function signUp(Request $r)
    {
          $date = date('Y-m-d H:i:s');

          try{
              //insert user
              app_user::insert(
                [
                'role' => 'Beneficiary', 
                'name' => $r->input('name'), 
                'address' => $r->input('address'), 
                'email' => $r->input('email'),
                'password' => Hash::make($r->input('password')),
                'contactNumber' => $r->input('contact'),
                'companyName' => $r->input('company'),
                'created_at' => $date,
                'updated_at' => $date
                ]
              );

            return '200 Ok';
        }catch (\Exception $e) {
            return '500 Internal Server Error';
        }

    }

    //check if user exist in database
    function login(Request $r)
    {
        $likeEmail = $r->input('email');
       
        $users = app_user::select('email', 'password', 'name')
        ->where('email','LIKE', $likeEmail)
        ->get();

        $userCount = collect($users)->count();
        if($userCount > 0)
        {
            foreach ($users as $user) {
                //Unhash password
                if(Hash::check($r->input('password'), $user->password))
                    {
                        //return name and status response :: successfully login
                        $role = $this->checkRole($likeEmail);
                        return  array('login'=> TRUE, 'name' => $user->name, 'role' => $role, 'Status'=> '200 OK');
                    }
                    else
                    {
                        //return name and status response :: login failed
                        return  array('login'=> FALSE, 'Status'=> '400 Bad Request');
                    }
            }
        }
        else
        {
            return  array('login'=> FALSE);
        }
        
    }
 
}//end_of_signUp