<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = User::all();
        return view('users')->with('customer',$customer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = User::create($request->all());
        return response()->json($customer);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function show(UserModel $userModel)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function edit(UserModel $userModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserModel $userModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserModel $userModel)
    {
        //
    }
}