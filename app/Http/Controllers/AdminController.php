<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
class AdminController extends Controller
{
    public function adminregistration(){
        return view ('adminregistration');
    }


    public function adminStore(Request $request)
    {

        $admin = new Admin;
        $admin->name =  $request['name'];
        $admin->dob =  $request['dob'];
        $admin->gender =  $request['gender'];
        $admin->email =  $request['email'];
        $admin->number =  $request['number'];
        $admin->save();

        return redirect ('/viewAdmin');

    }
    
    
    public function view()
    {
        $adminsData = admin::all(); 
        $data = compact('adminsData');

        return view('viewAdmin')->with($data);
    }

    public function delete($id)
    {
        $admin = admin::find($id);
        if(!is_null($admin)){
            $admin->delete();
        }
        return redirect('viewAdmin');
    }

    public function edit($id){
        $admin = admin::find($id);
        if(is_null($admin)){
        return redirect('viewAdmin');
        }
        else{
            $data = compact('admin');
            return view ('editAdmin')->with($data);
        }
    }
    public function update($id, Request $request)
    {
        $admin = admin::find($id);
        $admin->name =  $request['name'];
        $admin->dob =  $request['dob'];
        $admin->gender =  $request['gender'];
        $admin->email =  $request['email'];
        $admin->number =  $request['number'];
        $admin->save();
        return redirect('viewAdmin');
    }
}