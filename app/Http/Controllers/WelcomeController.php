<?php

namespace App\Http\Controllers;

use App\Product;
use App\Type_product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $types = Type_product::all();

        $products = Product::all();

        return view('welcome', compact('types', 'products'));
    }
}
