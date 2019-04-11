<?php

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


Route::get('/index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);
Route::get('/loai-san-pham',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSp'
]);
Route::get('/chi-tiet-san-pham',[
	'as' => 'chitietsanpham',
	'uses'=>'PageController@getChiTiet'
]);
Route::get('/get-san-pham',[
	'as'=>'sanpham',
	'uses' =>'PageController@getSanPham'
]);
Route::get('/dang-nhap',[
	'as'=>'dangnhap',
	'uses' => 'PageController@getLogin'
]);
Route::get('/dang-ki',['
	as'=>'dangki',
	'uses'=>'PageController@getDangki'
]);
Route::get('/get_gio_hang',['
	as'=>'giohang',
	'uses'=>'PageController@get_gio_hang'
]);
Route::get('/gia-ca',[
	'as'=>'giaca',
	'uses'=>'PageController@get_pricing'
]);
Route::get('/phan-hoi',[
	'as'=>'phanhoi',
	'uses'=>'PageController@get_contact'
]);
Route::get('/kiem-tra',
[
	'as'=>'kiemtra',
	'uses'=>'PageController@get_checkout'
]);