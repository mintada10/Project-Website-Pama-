<?php

namespace App\Http\Controllers\Admin;

use App\Homepage;
use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class HomepageController extends Controller
{
    public function index(){
        $homepage = Homepage::all();
        return view('admin.homepage.index',compact('homepage'));
    }
    public function addhomepage(){
        return view('admin.homepage.addhomepage')->with('admins',Admin::all());
    }
    public function createhomepage(Request $request){
        $validateData = $request->validate(
            [
                'information_test' => 'required',
                'recommended_product' => 'required',
                'product_name' => 'required',
                'price' => 'required|numeric',
                'id_admin' => 'required',
                
                'image_bg' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'information_test.required' => 'กรุณาป้อนข้อมูล',
                'recommended_product.required' => 'กรุณาป้อนชื่อสินค้าแนะนำ',
                'product_name.required' => 'กรุณาป้อนชื่อสินค้า',
                'id_admin.required' => 'กรุณาป้อนผู้สร้างสินค้า',
                'price.required' => 'กรุณาป้อนราคาสินค้า',
                'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
                'image_bg.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image_bg.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image_bg.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );
        $homepage = new Homepage();
        $homepage->	information_test = $request->information_test;
        $homepage->	recommended_product = $request->recommended_product;
        $homepage->	product_name = $request->product_name;
        $homepage->	price = $request->price;
        $homepage->	id_admin = $request->id_admin;

        if ($request->hasFile('image_bg')) {
            $filename = Str::random(10) . '.' . $request->file('image_bg')->getClientOriginalExtension();
            $request->file('image_bg')->move(public_path() . '/admin/imagehomepage/', $filename);
            Image::make(public_path() . '/admin/imagehomepage/' . $filename);
            $homepage->image_bg = $filename;
        } else {
            $homepage->image_bg = 'nopic.png';
        }

        $homepage->save();
        return redirect()->route('homepage.index')->with('success','บันทึกข้อมูลเรียบร้อบแล้ว');
    }
    public function edithomepage($id){
        $edithomepage = homepage::find($id);
        return view('admin.homepage.edithomepage', compact('edithomepage'))
        ->with('admins',Admin::all());
        
        
    }
    public function updatehomepage(Request $request, $id){
        $validateData = $request->validate(
            [
                'information_test' => 'required',
                'recommended_product' => 'required',
                'product_name' => 'required',
                'price' => 'required|numeric',
                'id_admin' => 'required',
                
                'image_bg' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'information_test.required' => 'กรุณาป้อนข้อมูล',
                'recommended_product.required' => 'กรุณาป้อนชื่อสินค้าแนะนำ',
                'product_name.required' => 'กรุณาป้อนชื่อสินค้า',
                'id_admin.required' => 'กรุณาป้อนผู้สร้างสินค้า',
                'price.required' => 'กรุณาป้อนราคาสินค้า',
                'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
                'image_bg.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image_bg.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image_bg.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );
        
       

        if ($request->hasFile('image_bg')) {
            $homepage = Homepage::find($id);
            if ($homepage->image_bg != 'nopic.png') {
                File::delete(public_path() . '/admin/imagehomepage/' . $homepage->image_bg);
            }
            $filename = Str::random(10) . '.' . $request->file('image_bg')->getClientOriginalExtension();
            $request->file('image_bg')->move(public_path() . '/admin/imagehomepage/', $filename);
            Image::make(public_path() . '/admin/imagehomepage/' . $filename);
            $homepage->image_bg = $filename;
            $homepage->	information_test = $request->information_test;
            $homepage->	recommended_product = $request->recommended_product;
            $homepage->	product_name = $request->product_name;
            $homepage->	price = $request->price;
            $homepage->	id_admin = $request->id_admin;
        } else {
            $homepage = Homepage::find($id);
            $homepage->	information_test = $request->information_test;
            $homepage->	recommended_product = $request->recommended_product;
            $homepage->	product_name = $request->product_name;
            $homepage->	price = $request->price;
            $homepage->	id_admin = $request->id_admin;
        }

        $homepage->save();
        return redirect()->route('homepage.index')->with('update','แก้ไขข้อมูลเรียบร้อบแล้ว');
        
    }
    public function deletehomepage($id){
        $deletehomepage = Homepage::find($id);
        if ($deletehomepage->image != 'nopic.png') {
            File::delete(public_path() . '/admin/imagehomepage/' . $deletehomepage->image_bg);
        }
        $deletehomepage->delete();
        return redirect()->route('homepage.index')->with('delet','ลบข้อมูลเรียบร้อบแล้ว');

    }

}
