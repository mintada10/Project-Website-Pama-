<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    public function edituser($id){
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    public function updateuser(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->update();
        return redirect('admin/user/index');
    }

    public function deleteuser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/index');
    }
}
