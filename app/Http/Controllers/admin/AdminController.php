<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin.index');
    }
    public function addadmin(){
        return view('admin.admin.addadmin');
    }
    public function editadmin(){
        return view('admin.admin.editadmin');
    }
    public function create(Request $request){
        //dd($request);
        $validatedData = $request->validate([
            'name' => 'required|unique:admins|max:255',
        ],
        [
            'name.required' = 'กรุณาป้อนข้อมูลชื่อก่อน',
            'name.unique' = 'มีชื่อนี้อยู่ในฐานแล้ว',
            'name.max' = 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $admin = new Admin;
        $admin->name	 = $request->name;
        $admin->password = $request->password;
        $admin->email    = $request->email;
        $admin->save();
        return redirect('admin/admin/addadmin');
    }
}

