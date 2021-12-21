<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class ContentController extends Controller
{
    public function index(){
        $content = Content::all();
        return view('admin.content.index', compact('content'));
    }
    public function addcontent(){
        return view('admin.content.addcontent')->with('admins',Admin::all());
    }
    public function createcontent(Request $request){
        $validateData = $request->validate(
            [
                'id_admin' => 'required',               
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'id_admin.required' => 'กรุณาป้อนผู้สร้างสินค้า',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );
        $content = new Content();
        $content->id_admin = $request->id_admin;

        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/imagecontent/', $filename);
            Image::make(public_path() . '/admin/imagecontent/' . $filename);
            $content->image = $filename;
        } else {
            $content->image = 'nopic.png';
        }

        $content->save();
        return redirect()->route('content.index');

    }
    public function editcontent($id){
        $editcontent = Content::find($id);
        return view('admin.content.editcontent',compact('editcontent'))
        ->with('admins',Admin::all());
    }
    public function updatecontent(Request $request, $id){
        $validateData = $request->validate(
            [
                'id_admin' => 'required',               
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'id_admin.required' => 'กรุณาป้อนผู้สร้างสินค้า',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );
        if ($request->hasFile('image')) {
            $content = Content::find($id);
            if ($content->image != 'nopic.png') {
                File::delete(public_path() . '/admin/imagecontent/' . $content->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/imagecontent/', $filename);
            Image::make(public_path() . '/admin/imagecontent/' . $filename);
            $content->image = $filename;
            $content->id_admin = $request->id_admin;
        } else {
            $content = Content::find($id);
            $content->id_admin = $request->id_admin;
        }

        $content->save();
        return redirect()->route('content.index');
        
    }
    public function deletecontent($id){
        $deletecontent = Content::find($id);
        if ($deletecontent->image != 'nopic.png') {
            File::delete(public_path() . '/admin/imagecontent/' . $deletecontent->image);
        }
        $deletecontent->delete();
        return redirect()->route('content.index');
    }
        
}
