<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use Auth;
use Illuminate\Support\Facades\Session;

class Dashboardcontroller extends Controller
{

// 	public function __construct()
// {
//     $this->middleware('auth');
// }



    public function index(){
       // dd(Session::all());
       //session('user_data_in_session');die;
        echo Session::get('user_data_in_session');
        echo  Session()->get('event_request_data');
        echo Auth::user();die;
        return view('admin.dashboard');
    }
}
