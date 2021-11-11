<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackgroundController extends Controller
{
    public function index(){
        return view('admin.background.index');
    }
    public function addbackground(){
        return view('admin.background.addbackground');
    }
    public function editbackground(){
        return view('admin.background.editbackground');
    }
}
