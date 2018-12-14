<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAddressesController extends Controller
{
    public function index(Request $request)
    {
        return view('users.user_addresses.index',[
           'addresses' =>$request->user()->addresses,
        ]);
    }
}
