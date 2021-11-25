<?php

namespace App\Http\Controllers\Admin;

use App\Type_product;
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
    public function createtypeproduct(Request $request){
        //dd($request);
    
        $typeproduct = new Type_product;
        $typeproduct->name_manu	= $request->namemenu;
        $typeproduct->save();
        return redirect('admin/type_product/addtypeproduct');
    }
    
}
