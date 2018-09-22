<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserJqueryController extends Controller
{
    public function index(){
        return view('userVue');
    }
    public function show(){
        $customer = User::all();
        return $customer = response()->json($customer);
    }
}
