<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserVueController extends Controller
{
    public function index(){
        $customer = User::all();
        return view('userVue')->with('customer',$customer);
    }
}
