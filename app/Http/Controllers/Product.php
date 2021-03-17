<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class Product extends Controller
{
    public function add_pro(){
        $pro_cat = DB::table("tb1_category_product")->orderby('id','desc')->get();
        $pro_brand = DB::table("tb1_brand_product")->orderby('id','desc')->get();
        return view('admin.add_pro')->with('pro_brand',$pro_brand)->with('pro_cat',$pro_cat);
    }
    public function all_pro(){
        //$all_product=DB::table('tb1_product')->join('tb1_category_product')->where('tb1_category_product.id','=','tb1_product.category_id')->join('tb1_brand_product.id','=','tb1_product.brand_id');
        $all_product=DB::table('tb1_product')->join('tb1_category_product','tb1_category_product.id','=','category_id')->join('tb1_brand_product','tb1_brand_product.id','=','brand_id')->get();
        $manager=view('admin.all_pro')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.all_pro',$manager);
    }
    public function save_pro(Request $request){
        $data = array();
        $data['product_name']=$request->pro_name;
        $data['product_price']=$request->pro_price;
        $data['brand_id']=$request->pro_brand;
        $data['category_id']=$request->pro_cat;
        $data['product_content']=$request->pro_content;
        $data['product_stt']=$request->pro_stt;
        $get_img = $request->file('pro_img');
        if($get_img){
            $new_img = time().'.'.$get_img->getClientOriginalExtension();
            $get_img->move('public/upload/product',$new_img);
            $data['product_image']=$new_img;
            Session::put('message','Đã thêm');

        }
        DB::table('tb1_product')->insert($data);
        return Redirect::to('add-pro');
    }
    public function active_pro($id){
        DB::table('tb1_product')->where('id',$id)->update(['product_stt'=>1]);
        Session::put('message','Đã kích hoạt');
        return Redirect::to('all-pro');
    }
    public function unactive_pro($id){
        DB::table('tb1_product')->where('id',$id)->update(['product_stt'=>0]);
        Session::put('message','Đã hủy kích hoạt');
        return Redirect::to('all-pro');
    }
    public function edit_pro($id){
        //$pro_cat = DB::table("tb1_category_product")->orderby('id','desc')->get();
        //$pro_brand = DB::table("tb1_brand_product")->orderby('id','desc')->get();
        $edit_product=DB::table('tb1_product')->where('id',$id)->get();
        $manager=view('admin.edit_pro')->with('edit_product',$edit_product);
        return view('admin_layout')->with('admin.edit_pro',$manager);
    }
    public function upd_pro(Request $request,$id){
        $data = array();
        $data['product_name'] = $request->product_name;
        DB::table('tb1_product')->where('id',$id)->update($data);
        Session::put('message','Đã cập nhật');
        return Redirect::to('all-pro');
    }
    public function del_pro($id){
        DB::table('tb1_product')->where('id',$id)->delete();
        Session::put('message','Đã xóa');
        return Redirect::to('all-pro');
    }
}
