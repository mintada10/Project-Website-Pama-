<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//Adminpage
Route::get('/index','Admin\AdminpageController@index')->name('index');

//Admin
Route::get('admin/admin/index','Admin\AdminController@index')->name('admin.index'); 
Route::get('admin/admin/addadmin','Admin\AdminController@addadmin')->name('addadmin');
Route::get('admin/admin/editadmin','Admin\AdminController@editadmin')->name('editadmin');
Route::post('admin/admin/create','Admin\AdminController@create')->name('create');


//Product
Route::get('admin/product/index','Admin\ProductController@index')->name('product.index');
Route::get('admin/product/addproduct','Admin\ProductController@addproduct')->name('addproduct');
Route::get('admin/product/editproduct','Admin\ProductController@editproduct')->name('editproduct');

//Type_product
Route::get('admin/type_product/index','Admin\Type_productController@index')->name('type_product.index');
Route::get('admin/type_product/addtypeproduct','Admin\Type_productController@addtypeproduct')->name('addtypeproduct');
Route::get('admin/type_product/edittypeproduct','Admin\Type_productController@edittypeproduct')->name('edittypeproduct');
Route::post('admin/type_product/create','Admin\Type_productController@create')->name('createtypeproduct');

//background
Route::get('admin/background/index','Admin\BackgroundController@index')->name('background.index');
Route::get('admin/background/addbackground','Admin\BackgroundController@addbackground')->name('addbackground');
Route::get('admin/background/editbackground','Admin\BackgroundController@editbackground')->name('editbackground');

//user
Route::get('admin/user/index','Admin\UserController@index')->name('user.index');
Route::get('admin/user/adduser','Admin\UserController@adduser')->name('adduser');
Route::get('admin/user/edituser','Admin\UserController@edituser')->name('edituser');

//content
Route::get('admin/content/index','Admin\ContentController@index')->name('content.index');
Route::get('admin/content/addcontent','Admin\ContentController@addcontent')->name('addcontent');
Route::get('admin/content/editcontent','Admin\ContentController@editcontent')->name('editcontent');

//homepage
Route::get('admin/homepage/index','Admin\HomepageController@index')->name('homepage.index');
Route::get('admin/homepage/addhomepage','Admin\HomepageController@addhomepage')->name('addhomepage');
Route::get('admin/homepage/edithomepage','Admin\HomepageController@edithomepage')->name('edithomepage');

Auth::routes();

Route::get('/about','HomeController@about');

Route::get('/home', 'HomeController@index')->name('home');
