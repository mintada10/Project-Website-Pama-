<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('admin.homepage.index');
    }
    public function addhomepage(){
        return view('admin.homepage.addhomepage');
    }
    public function edithomepage(){
        return view('admin.homepage.edithomepage');
    }
}
