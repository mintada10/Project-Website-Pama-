<?php

namespace App\Http\Controllers;

use App\Product;
use App\Type_product;
use App\Content;
use App\background;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $types = Type_product::all();

        $products = Product::all();

        $contents = content::all();

        $backgrounds = background::all();

        return view('welcome', compact('types', 'products' ,'contents','backgrounds'));
    }
}
