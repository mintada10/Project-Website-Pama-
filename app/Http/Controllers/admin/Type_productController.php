<?php

namespace App\Http\Controllers\Admin;

use App\Type_product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Type_productController extends Controller
{
    public function index(){
        $typeproduct = Type_product::all();
        return view('admin.type_product.index',compact('typeproduct'));
    }
    public function addtypeproduct(){
        return view('admin.type_product.addtypeproduct');
    }
    public function createtypeproduct(Request $request){
        //dd($request);
        $validatedData = $request->validate([
            'name_manu'     => 'required|unique:type_products|max:255',

        ],
        [
            'name_manu.required' => 'กรุณาป้อนข้อมูลก่อน',
            'name_manu.unique' => 'มีชื่อข้อมูลนี่อยู่แล้ว',
            'name_manu.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',

        ]);
        $typeproduct = new Type_product;
        $typeproduct->name_manu	 = $request->name_manu;
        $typeproduct->save();
        return redirect('admin/type_product/index')->with('success','บันทึกข้อมูลเรียบร้อบแล้ว');
    }
    public function edittypeproduct($id_pt){
        $typeproduct = Type_product::find($id_pt);
        //dd($typeproduct);
        return view('admin.type_product.edit',compact('typeproduct'));
    }
    public function updatetypeproduct(Request $request,$id_pt){
        $validatedData = $request->validate([
            'name_manu'     => 'required|unique:type_products|max:255',

        ],
        [
            'name_manu.required' => 'กรุณาป้อนข้อมูลก่อน',
            'name_manu.unique' => 'มีชื่อข้อมูลนี่อยู่แล้ว',
            'name_manu.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',

        ]);
        $typeproduct = Type_product::find($id_pt);
        $typeproduct->name_manu =$request->name_manu;
        $typeproduct->save();
        return redirect('admin/type_product/index')->with('update','แก้ไขข้อมูลเรียบร้อบแล้ว');
    }
    public function delettypeproduct($id_pt){
        Type_product::destroy($id_pt);
        return redirect('admin/type_product/index')->with('delet','ลบข้อมูลเรียบร้อบแล้ว');
    }
 
}
