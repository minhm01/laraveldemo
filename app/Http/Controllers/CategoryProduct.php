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
    public function add_cat(){
        return view('admin.add_cat');
    }
    public function all_cat(){
        $all_cat=DB::table('tb1_category_product')->get();
        $manager=view('admin.all_cat')->with('all_cat',$all_cat);
        return view('admin_layout')->with('admin.all_cat',$manager);
    }
    public function save_cat(Request $request){
        $data = array();
        $data['category_name']=$request->cat_name;
        $data['category_stt']=$request->cat_stt;
        DB::table('tb1_category_product')->insert($data);
        Session::put('message','Đã thêm');
        return Redirect::to('add-category');
    }
    public function active_cat($id){
        DB::table('tb1_category_product')->where('id',$id)->update(['category_stt'=>1]);
        Session::put('message','Đã kích hoạt');
        return Redirect::to('all-category');
    }
    public function unactive_cat($id){
        DB::table('tb1_category_product')->where('id',$id)->update(['category_stt'=>0]);
        Session::put('message','Đã hủy kích hoạt');
        return Redirect::to('all-category');
    }
    public function edit_cat($id){
        $edit_cat=DB::table('tb1_category_product')->where('id',$id)->get();
        $manager=view('admin.edit_cat')->with('edit_cat',$edit_cat);
        return view('admin_layout')->with('admin.edit_cat',$manager);
    }
    public function upd_cat(Request $request,$id){
        $data = array();
        $data['category_name'] = $request->cat_name;
        DB::table('tb1_category_product')->where('id',$id)->update($data);
        Session::put('message','Đã cập nhật');
        return Redirect::to('all-category');
    }
    public function del_cat($id){
        DB::table('tb1_category_product')->where('id',$id)->delete();
        Session::put('message','Đã xóa');
        return Redirect::to('all-category');
    }
}
