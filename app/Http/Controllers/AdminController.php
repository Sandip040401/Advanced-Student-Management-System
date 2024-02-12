<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
class AdminController extends Controller
{
    public function adminregistration(){
        return view ('adminregistration');
    }


    public function adminStore(Request $request)
    {

        $admin = new admin;
        $admin->name =  $request['name'];
        $admin->dob =  $request['dob'];
        $admin->gender =  $request['gender'];
        $admin->email =  $request['email'];
        $admin->number =  $request['number'];
        $admin->save();

    }
}
