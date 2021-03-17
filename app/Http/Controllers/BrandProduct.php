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
    public function add_brand(){
        return view('admin.add_brand');
    }
    public function all_brand(){
        $all_brand=DB::table('tb1_brand_product')->get();
        $manager=view('admin.all_brand')->with('all_brand',$all_brand);
        return view('admin_layout')->with('admin.all_brand',$manager);
    }
    public function save_brand(Request $request){
        $data = array();
        $data['brand_name']=$request->brand_name;
        $data['brand_stt']=$request->brand_stt;
        DB::table('tb1_brand_product')->insert($data);
        Session::put('message','Đã thêm');
        return Redirect::to('add-brand');
    }
    public function active_brand($id){
        DB::table('tb1_brand_product')->where('id',$id)->update(['brand_stt'=>1]);
        Session::put('message','Đã kích hoạt');
        return Redirect::to('all-brand');
    }
    public function unactive_brand($id){
        DB::table('tb1_brand_product')->where('id',$id)->update(['brand_stt'=>0]);
        Session::put('message','Đã hủy kích hoạt');
        return Redirect::to('all-brand');
    }
    public function edit_brand($id){
        $edit_brand=DB::table('tb1_brand_product')->where('id',$id)->get();
        $manager=view('admin.edit_brand')->with('edit_brand',$edit_brand);
        return view('admin_layout')->with('admin.edit_brand',$manager);
    }
    public function upd_brand(Request $request,$id){
        $data = array();
        $data['brand_name'] = $request->brand_name;
        DB::table('tb1_brand_product')->where('id',$id)->update($data);
        Session::put('message','Đã cập nhật');
        return Redirect::to('all-brand');
    }
    public function del_brand($id){
        DB::table('tb1_brand_product')->where('id',$id)->delete();
        Session::put('message','Đã xóa');
        return Redirect::to('all-brand');
    }
}
