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
    public function createadmin(Request $request){
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
        return redirect('admin/admin/index')->with('success','บันทึกข้อมูลเรียบร้อบแล้ว');
    }

    public function editadmin($id_admin){
        $admin = Admin::find($id_admin);
        return view('admin.admin.edit',compact('admin'));
    }

    public function updateadmin(Request $request,$id_admin){
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
        $admin = Admin::find($id_admin);
        $admin->name =$request->name;
        $admin->password = $request->password;
        $admin->email    = $request->email;
        $admin->save();
        return redirect('admin/admin/index')->with('update','แก้ไขข้อมูลเรียบร้อบแล้ว');
    }

    public function deleteadmin($id_admin){
        Admin::destroy($id_admin);
        return redirect('admin/admin/index')->with('delet','ลบข้อมูลเรียบร้อบแล้ว');
    }

    
    
    
}

