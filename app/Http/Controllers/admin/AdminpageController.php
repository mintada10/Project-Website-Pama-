<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Type_product;

class AdminpageController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('admin.index', compact('product'));
    }
}
