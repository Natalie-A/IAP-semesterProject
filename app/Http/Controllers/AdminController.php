<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function getData(Request $req){
        $Admin= new Admin;
        $Admin ->admin_full_name=$req->admin_full_name;
        $Admin->admin_email=$req->admin_email;
        $Admin->password = Hash::make($req->newPassword);
        $Admin->save();


    }
}
