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
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_pro(){
        $this->AuthLogin();
        $pro_cat = DB::table("tb1_category_product")->orderby('category_id','desc')->get();
        $pro_brand = DB::table("tb1_brand_product")->orderby('brand_id','desc')->get();
        return view('admin.add_pro')->with('pro_brand',$pro_brand)->with('pro_cat',$pro_cat);
    }
    public function all_pro(){        
        $this->AuthLogin();
        $all_product=DB::table('tb1_product')->join('tb1_category_product','tb1_category_product.category_id','=','tb1_product.category_id')->join('tb1_brand_product','tb1_brand_product.brand_id','=','tb1_product.brand_id')->get();
        $manager=view('admin.all_pro')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.all_pro',$manager);
    }
    public function save_pro(Request $request){
        $this->AuthLogin();
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
        $this->AuthLogin();
        DB::table('tb1_product')->where('product_id',$id)->update(['product_stt'=>1]);
        Session::put('message','Đã kích hoạt');
        return Redirect::to('all-pro');
    }
    public function unactive_pro($id){
        $this->AuthLogin();
        DB::table('tb1_product')->where('product_id',$id)->update(['product_stt'=>0]);
        Session::put('message','Đã hủy kích hoạt');
        return Redirect::to('all-pro');
    }
    public function edit_pro($id){
        $this->AuthLogin();
        $pro_cat = DB::table("tb1_category_product")->orderby('category_id','desc')->get();
        $pro_brand = DB::table("tb1_brand_product")->orderby('brand_id','desc')->get();
        $edit_product=DB::table('tb1_product')->where('product_id',$id)->get();
        $manager=view('admin.edit_pro')->with('edit_product',$edit_product)->with('pro_cat',$pro_cat)->with('pro_brand',$pro_brand);
        return view('admin_layout')->with('admin.edit_pro',$manager);
    }
    public function upd_pro(Request $request,$id){
        $this->AuthLogin();
        $data = array();
        $data['product_name']=$request->pro_name;
        $data['product_price']=$request->pro_price;
        $data['brand_id']=$request->pro_brand;
        $data['category_id']=$request->pro_cat;
        $data['product_content']=$request->pro_content;
        $get_img = $request->file('pro_img');
        if($get_img){
            $new_img = time().'.'.$get_img->getClientOriginalExtension();
            $get_img->move('public/upload/product',$new_img);
            $data['product_image']=$new_img;
            Session::put('message','Đã cập nhật');
        }
        DB::table('tb1_product')->where('product_id',$id)->update($data);
        Session::put('message','Đã cập nhật');
        return Redirect::to('all-pro');
    }
    public function del_pro($id){
        $this->AuthLogin();
        DB::table('tb1_product')->where('product_id',$id)->delete();
        Session::put('message','Đã xóa');
        return Redirect::to('all-pro');
    }
    public function product_detail($id){
        $cat_pro = DB::table('tb1_category_product')->where('category_stt','1')->get();
        $brand_pro = DB::table('tb1_brand_product')->where('brand_stt','1')->get();
        $product = DB::table('tb1_product')->join('tb1_category_product','tb1_category_product.category_id','=','tb1_product.category_id')->join('tb1_brand_product','tb1_brand_product.brand_id','=','tb1_product.brand_id')->where('tb1_product.product_id',$id)->get();
        foreach($product as $key => $value){
            $cat_id=$value->category_id;
        }
        $rela = DB::table('tb1_product')->join('tb1_category_product','tb1_category_product.category_id','=','tb1_product.category_id')->join('tb1_brand_product','tb1_brand_product.brand_id','=','tb1_product.brand_id')->where('tb1_product.category_id',$cat_id)->whereNotIn('tb1_product.product_id',[$id])->orderBy('tb1_product.product_id','desc')->limit('4')->get();
        return view('pages.sanpham')->with('product',$product)->with('category',$cat_pro)->with('brand',$brand_pro)->with('rela',$rela);    
    }
}
