<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Home extends Controller
{
    public function index()
    {
        $customer = User:: orderBy('created_at', 'desc')->paginate(5);
        return view('home')->with('customer',$customer);
    }





}
