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
 
}
