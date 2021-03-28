<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    function getData(Request  $req){
        $customer= new customer;
        $customer ->cust_full_name=$req->cust_full_name;
        $customer->cust_email=$req->cust_email;
        //$customer->password=$req->password;
        $customer->password = Hash::make($req->newPassword);
        $customer->phone_number=$req->phone_number;
        $customer->save();

    }
}
