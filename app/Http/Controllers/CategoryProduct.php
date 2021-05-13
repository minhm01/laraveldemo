<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_cat(){
        $this->AuthLogin();
        return view('admin.add_cat');
    }
    public function all_cat(){
        $this->AuthLogin();
        $all_cat=DB::table('tb1_category_product')->get();
        $manager=view('admin.all_cat')->with('all_cat',$all_cat);
        return view('admin_layout')->with('admin.all_cat',$manager);
    }
    public function save_cat(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['category_name']=$request->cat_name;
        $data['category_stt']=$request->cat_stt;
        DB::table('tb1_category_product')->insert($data);
        Session::put('message','Đã thêm');
        return Redirect::to('add-category');
    }
    public function active_cat($id){
        $this->AuthLogin();
        DB::table('tb1_category_product')->where('category_id',$id)->update(['category_stt'=>1]);
        Session::put('message','Đã kích hoạt');
        return Redirect::to('all-category');
    }
    public function unactive_cat($id){
        $this->AuthLogin();
        DB::table('tb1_category_product')->where('category_id',$id)->update(['category_stt'=>0]);
        Session::put('message','Đã hủy kích hoạt');
        return Redirect::to('all-category');
    }
    public function edit_cat($id){
        $this->AuthLogin();
        $edit_cat=DB::table('tb1_category_product')->where('category_id',$id)->get();
        $manager=view('admin.edit_cat')->with('edit_cat',$edit_cat);
        return view('admin_layout')->with('admin.edit_cat',$manager);
    }
    public function upd_cat(Request $request,$id){
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->cat_name;
        DB::table('tb1_category_product')->where('category_id',$id)->update($data);
        Session::put('message','Đã cập nhật');
        return Redirect::to('all-category');
    }
    public function del_cat($id){
        $this->AuthLogin();
        DB::table('tb1_category_product')->where('category_id',$id)->delete();
        Session::put('message','Đã xóa');
        return Redirect::to('all-category');
    }
    public function show_cat_home($id){
        $cat_pro = DB::table('tb1_category_product')->where('category_stt','1')->get();
        $brand_pro = DB::table('tb1_brand_product')->where('brand_stt','1')->get();
        $cat_by_id = DB::table('tb1_product')->join('tb1_category_product','tb1_category_product.category_id','=','tb1_product.category_id')->join('tb1_brand_product','tb1_brand_product.brand_id','=','tb1_product.brand_id')->where('tb1_product.category_id',$id)->get();
        $cat_name = DB::table('tb1_category_product')->where('category_id',$id)->limit(1)->get();
        return view('pages.category.show_cat')->with('category',$cat_pro)->with('brand',$brand_pro)->with('cat_by_id',$cat_by_id)->with('cat_name',$cat_name);
    }    
}
