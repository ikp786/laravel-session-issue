<?php

namespace App\Http\Controllers\Admin;
use Auth;
Use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    //


    public function signIn(){
        return view('admin.login.login');
    }

    public function loginUser(REQUEST $request){

    Session::put('user_data_in_session','Ibrahim Khan Parihar');
    Session()->put('event_request_data', 'Ibrahim Khan Parihar');
echo '<pre>';
echo  Session()->get('event_request_data');

    	if (Auth::attempt(['email' => $request->email, 'password' => $request->password],true)){
          //  echo Auth::user();die;
          Auth::login(Auth::user(), true);

// print user information
//print_r(Auth::user());die;


    		Redirect::to('admin/dashboard')->send()->with('success','Login Succesfully');
    	}
    	else{
    		// echo "aaaaaaaaaaa";die;
    		Redirect::to('admin/login/login')->send()->with('failure','Something wrnt wrong');
    	}
    }
}
