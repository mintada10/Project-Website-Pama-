<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){
        return view('admin.content.index');
    }
    public function addcontent(){
        return view('admin.content.addcontent');
    }
    public function editcontent(){
        return view('admin.content.editcontent');
    }
}
