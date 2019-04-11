<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	$slide = Slide::all();
    	//$new_product = Product::where('new',1)->get();//lấy 1 
    	$new_product  = Product::where('new',1)->paginate(4);

    	$sanphamkhuyenmai = Product::where('promotion_price','<>',0)->paginate(8);
 

    	//return view('page.trangchu',['slide'=>$slide ]);
    	return view('page.trangchu',compact('slide','new_product','sanphamkhuyenmai'));
    }

    public function getLoaiSp()
    {
    	return view('page.loaisanpham');
    }
    public function getChiTiet()
    {
    	return view('page.chitietsanpham');
    } 
    public function getSanPham()
    {
    	return view('page.sanpham');
    }
    public function getLogin()
    {
    	return view('page.login');
    }
    public function getDangki()
    {
    	return view ('page.dangki');
    }
    public function get_gio_hang()
    {
    	return view('page.shopping_cart');
    }
    public function get_pricing()
    {
    	return view('page.pricing');
    }
    public function get_contact()
    {
    	return view('page.contact');
    }
    public function get_checkout()
    {
    	return view('page.checkout');
    }
}
