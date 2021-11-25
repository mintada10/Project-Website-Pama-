<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $admin = Admin::all();
        return view('admin.admin.index',compact('admin'));
    }
    public function addadmin(){
        return view('admin.admin.addadmin');
    }
    public function create(Request $request){
        //dd($request);
        $validatedData = $request->validate([
            'name'     => 'required|unique:admins|max:255',
            'password'     => 'required|unique:admins|max:255',
            'email'     => 'required|unique:admins|max:255',
            
        ],
        [
            'name.required' => 'กรุณาป้อนข้อมูลก่อน',
            'name.unique' => 'มีชื่อข้อมูลนี่อยู่แล้ว',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',

            'password.required' => 'กรุณาป้อนข้อมูลก่อน',
            'password.unique' => 'รหัสผ่านซ้ำ',
            'password.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
            
            'email.required' => 'กรุณาป้อนข้อมูลก่อน',
            'email.unique' => 'มีชื่อข้อมูลนี่อยู่แล้ว',
            'email.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
            
        ]);
        
        $admin = new Admin;
        $admin->name	 = $request->name;
        $admin->password = $request->password;
        $admin->email    = $request->email;
        $admin->save();
        return redirect('admin/admin/index');
    }

    public function edit($id_admin){
        $admin = Admin::find($id_admin);
        dd($admin);
    }

    
    
    
}

