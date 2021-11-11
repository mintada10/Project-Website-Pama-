<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.user.index');
    }
    public function adduser(){
        return view('admin.user.adduser');
    }
    public function edituser(){
        return view('admin.user.edituser');
    }
}
