<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Type_product;
use Illuminate\Support\Str;
use Image;
use File;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware("VerifyIsTypeproduct")->only(['index','createproduct']);
    }
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }
    public function addproduct()
    {
        
        return view('admin.product.addproduct')->with('typeproducts',Type_product::all());
        
    }

    public function createproduct(Request $request)
    {
        $validateData = $request->validate(
            [
                'name' => 'required',
                'price' => 'required|numeric',
                'id_admin' => 'required',
                'id_pt' => 'required',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อสินค้า',
                'id_admin.required' => 'กรุณาป้อนผู้สร้างสินค้า',
                'id_pt.required' => 'กรุณาป้อนประเภทสินค้า',
                'price.required' => 'กรุณาป้อนราคาสินค้า',
                'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );



        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->id_admin = $request->id_admin;
        $product->id_pt = $request->id_pt;

        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filename);
            Image::make(public_path() . '/admin/images/' . $filename);
            $product->image = $filename;
        } else {
            $product->image = 'nopic.png';
        }

        $product->save();
        return redirect()->route('product.index')->with('success','บันทึกข้อมูลเรียบร้อบแล้ว');
    }

    public function editproduct($id)
    {
        $editproduct = Product::find($id);
        return view('admin.product.editproduct', compact('editproduct'))
        ->with('typeproducts',Type_product::all());
        
    }
    public function updateproduct(Request $request, $id)
    {
        $validateData = $request->validate(
            [
                'name' => 'required',
                'price' => 'required|numeric',
                'id_admin' => 'required',
                'id_pt' => 'required',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อสินค้า',
                'id_admin.required' => 'กรุณาป้อนผู้สร้างสินค้า',
                'id_pt.required' => 'กรุณาป้อนประเภทสินค้า',
                'price.required' => 'กรุณาป้อนราคาสินค้า',
                'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );
        if ($request->hasFile('image')) {
            $product = Product::find($id);
            if ($product->image != 'nopic.png') {
                File::delete(public_path() . '/admin/images/' . $product->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filename);
            Image::make(public_path() . '/admin/images/' . $filename);
            $product->image = $filename;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->id_admin = $request->id_admin;
            $product->id_pt = $request->id_pt;
        } else {
            $product = Product::find($id);
            $product->name = $request->name;
            $product->price = $request->price;
            $product->id_admin = $request->id_admin;
            $product->id_pt = $request->id_pt;
        }

        $product->save();
        return redirect()->route('product.index')->with('update','แก้ไขข้อมูลเรียบร้อบแล้ว');
    }
    public function deleteproduct($id){
        $deleteproduct = Product::find($id);
        if ($deleteproduct->image != 'nopic.png') {
            File::delete(public_path() . '/admin/images/' . $deleteproduct->image);
        }
        $deleteproduct->delete();
        return redirect()->route('product.index')->with('delet','ลบข้อมูลเรียบร้อบแล้ว');

    }
}
