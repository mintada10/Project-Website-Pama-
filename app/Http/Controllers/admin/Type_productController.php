<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Type_productController extends Controller
{
    public function index(){
        return view('admin.type_product.index');
    }
    public function addtypeproduct(){
        return view('admin.type_product.addtypeproduct');
    }
    public function edittypeproduct(){
        return view('admin.type_product.edittypeproduct');
    }
    public function create(Request $request){
        //dd($request);
    
        $admin = new Admin;
        $admin->name_manu	 = $request->namemenu;
        $admin->save();
        return redirect('admin/type_product/addtypeproduct');
    }
    
}
