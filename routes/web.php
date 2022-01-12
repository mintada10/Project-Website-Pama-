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

Route::get('/', 'WelcomeController@index');

//Adminpage
Route::get('/index','Admin\AdminpageController@index')->name('index');

//Admin
Route::get('admin/admin/index','Admin\AdminController@index')->name('admin.index'); 
Route::get('admin/admin/addadmin','Admin\AdminController@addadmin')->name('addadmin');
Route::post('admin/admin/createadmin','Admin\AdminController@createadmin')->name('createadmin');
Route::get('admin/admin/editadmin/{id}','Admin\AdminController@editadmin');
Route::post('admin/admin/updateadmin/{id}','Admin\AdminController@updateadmin');
Route::get('admin/admin/deleteadmin/{id}','Admin\AdminController@deleteadmin');


//Product
Route::get('admin/product/index','Admin\ProductController@index')->name('product.index');
Route::get('admin/product/addproduct','Admin\ProductController@addproduct')->name('addproduct');
Route::post('admin/product/createproduct','Admin\ProductController@createproduct')->name('createproduct');
Route::get('admin/product/editproduct/{id}','Admin\ProductController@editproduct');
Route::post('admin/product/updateproduct/{id}','Admin\ProductController@updateproduct');
route::get('admin/product/deleteproduct/{id}','Admin\ProductController@deleteproduct');



//Type_product
Route::get('admin/type_product/index','Admin\Type_productController@index')->name('type_product.index');
Route::get('admin/type_product/addtypeproduct','Admin\Type_productController@addtypeproduct')->name('addtypeproduct');
Route::post('admin/type_product/createtypeproduct','Admin\Type_productController@createtypeproduct')->name('createtypeproduct');
Route::get('admin/type_product/edittypeproduct/{id}','Admin\Type_productController@edittypeproduct');
Route::post('admin/type_product/updatetypeproduct/{id}','Admin\Type_productController@updatetypeproduct');
Route::get('admin/type_product/delettypeproduct/{id}','Admin\Type_productController@delettypeproduct');



//background
Route::get('admin/background/index','Admin\BackgroundController@index')->name('background.index');
Route::get('admin/background/addbackground','Admin\BackgroundController@addbackground')->name('addbackground');
Route::post('admin/background/createbackground','Admin\BackgroundController@createbackground')->name('createbackground');
Route::get('admin/background/editbackground/{id}','Admin\BackgroundController@editbackground');
Route::post('admin/background/updatebackground/{id}','Admin\BackgroundController@updatebackground');
Route::get('admin/background/deletebackground/{id}','Admin\BackgroundController@deletebackground');



//user
Route::get('admin/user/index','Admin\UserController@index')->name('user.index');
Route::get('admin/user/edituser/{id}','Admin\UserController@edituser');
Route::post('admin/user/updateuser/{id}','Admin\UserController@updateuser');
Route::get('admin/user/deleteuser/{id}','Admin\UserController@deleteuser');

//content
Route::get('admin/content/index','Admin\ContentController@index')->name('content.index');
Route::get('admin/content/addcontent','Admin\ContentController@addcontent')->name('addcontent');
Route::post('admin/content/createcontent','Admin\ContentController@createcontent')->name('createcontent');
Route::get('admin/content/editcontent/{id}','Admin\ContentController@editcontent');
Route::post('admin/content/updatecontent/{id}','Admin\ContentController@updatecontent');
Route::get('admin/content/deletecontent/{id}','Admin\ContentController@deletecontent');


//homepage
Route::get('admin/homepage/index','Admin\HomepageController@index')->name('homepage.index');
Route::get('admin/homepage/addhomepage','Admin\HomepageController@addhomepage')->name('addhomepage');
Route::post('admin/homepage/createhomepage','Admin\HomepageController@createhomepage')->name('createhomepage');
Route::get('admin/homepage/edithomepage/{id}','Admin\HomepageController@edithomepage');
Route::post('admin/homepage/updatehomepage/{id}','Admin\HomepageController@updatehomepage');
Route::get('admin/homepage/deletehomepage/{id}','Admin\HomepageController@deletehomepage');


Auth::routes();

Route::get('/about','HomeController@about');

Route::get('/home', 'HomeController@index')->name('home');
