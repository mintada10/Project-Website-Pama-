<?php

namespace App\Http\Controllers\Admin;

use App\Background;
use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class BackgroundController extends Controller
{
    public function index()
    {
        $background = Background::all();
        return view('admin.background.index', compact('background'));
    }
    public function addbackground()
    {
        
        return view('admin.background.addbackground')->with('admins',Admin::all());
    }
    public function createbackground(Request $request)
    {
        // dd($request);
        $validateData = $request->validate(
            [
                'id_admin' => 'required',
                'status' => 'required',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'id_admin.required' => 'กรุณาป้อนผู้สร้างสินค้า',
                'status.required' => 'กรุณาป้อนสถานะ',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );
        $background = new Background();
        $background->id_admin = $request->id_admin;
        $background->status = $request->status;

        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/imagebackground/', $filename);
            Image::make(public_path() . '/admin/imagebackground/' . $filename);
            $background->image = $filename;
        } else {
            $background->image = 'nopic.png';
        }

        $background->save();
        return redirect()->route('background.index');
    }
    public function editbackground($id)
    {
        $editbackground = Background::find($id);
        return view('admin.background.editbackground', compact('editbackground'))
        ->with('admins',Admin::all());
    }
    public function updatebackground(Request $request, $id)
    {
        $validateData = $request->validate(
            [
                'id_admin' => 'required',
                'status' => 'required',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'id_admin.required' => 'กรุณาป้อนผู้สร้างสินค้า',
                'status.required' => 'กรุณาป้อนสถานะ',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );
        if ($request->hasFile('image')) {
            $background = Background::find($id);
            if ($background->image != 'nopic.png') {
                File::delete(public_path() . '/admin/imagebackground/' . $background->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/imagebackground/', $filename);
            Image::make(public_path() . '/admin/imagebackground/' . $filename);
            $background->image = $filename;
            $background->id_admin = $request->id_admin;
            $background->status = $request->status;
        } else {
            $background = Background::find($id);
            $background->id_admin = $request->id_admin;
            $background->status = $request->status;
        }

        $background->save();
        return redirect()->route('background.index');
    }
    public function deletebackground($id){
        $deletebackground = Background::find($id);
        if ($deletebackground->image != 'nopic.png') {
            File::delete(public_path() . '/admin/imagebackground/' . $deletebackground->image);
        }
        $deletebackground->delete();
        return redirect()->route('background.index');

    }
}
