<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class BrandProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_brand(){
        $this->AuthLogin();
        return view('admin.add_brand');
    }
    public function all_brand(){
        $this->AuthLogin();
        $all_brand=DB::table('tb1_brand_product')->get();
        $manager=view('admin.all_brand')->with('all_brand',$all_brand);
        return view('admin_layout')->with('admin.all_brand',$manager);
    }
    public function save_brand(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['brand_name']=$request->brand_name;
        $data['brand_stt']=$request->brand_stt;
        DB::table('tb1_brand_product')->insert($data);
        Session::put('message','Đã thêm');
        return Redirect::to('add-brand');
    }
    public function active_brand($id){
        $this->AuthLogin();
        DB::table('tb1_brand_product')->where('brand_id',$id)->update(['brand_stt'=>1]);
        Session::put('message','Đã kích hoạt');
        return Redirect::to('all-brand');
    }
    public function unactive_brand($id){
        $this->AuthLogin();
        DB::table('tb1_brand_product')->where('brand_id',$id)->update(['brand_stt'=>0]);
        Session::put('message','Đã hủy kích hoạt');
        return Redirect::to('all-brand');
    }
    public function edit_brand($id){
        $this->AuthLogin();
        $edit_brand=DB::table('tb1_brand_product')->where('brand_id',$id)->get();
        $manager=view('admin.edit_brand')->with('edit_brand',$edit_brand);
        return view('admin_layout')->with('admin.edit_brand',$manager);
    }
    public function upd_brand(Request $request,$id){
        $this->AuthLogin();
        $data = array();
        $data['brand_name'] = $request->brand_name;
        DB::table('tb1_brand_product')->where('brand_id',$id)->update($data);
        Session::put('message','Đã cập nhật');
        return Redirect::to('all-brand');
    }
    public function del_brand($id){
        $this->AuthLogin();
        DB::table('tb1_brand_product')->where('brand_id',$id)->delete();
        Session::put('message','Đã xóa');
        return Redirect::to('all-brand');
    }
    public function show_bra_home($id){
        $cat_pro = DB::table('tb1_category_product')->where('category_stt','1')->get();
        $brand_pro = DB::table('tb1_brand_product')->where('brand_stt','1')->get();
        $bra_by_id = DB::table('tb1_product')->join('tb1_category_product','tb1_category_product.category_id','=','tb1_product.category_id')->join('tb1_brand_product','tb1_brand_product.brand_id','=','tb1_product.brand_id')->where('tb1_product.brand_id',$id)->get();
        $bra_name = DB::table('tb1_brand_product')->where('brand_id',$id)->limit(1)->get();
        return view('pages.category.show_bra')->with('category',$cat_pro)->with('brand',$brand_pro)->with('bra_by_id',$bra_by_id)->with('bra_name',$bra_name);
    } 
}
