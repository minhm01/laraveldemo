<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function index(){
        return view('admin_login');
    }
    public function show_dashboard(){
        $this->AuthLogin();
        return view('admin_layout');
    }
    public function dashboard(Request $request){
        $admin_email=$request->admin_email;
        $admin_password=md5($request->admin_password);
        $result = DB::table('tb1_admin')->where('admin_email',$admin_email)->where('password',$admin_password)->first();
        if($result){
            Session::put('admin_email',$result->admin_email);
            Session::put('admin_id',$result->id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message','Sai tài khoản');
            return Redirect::to('/admin');
        }
    }
    public function logout(){
        $this->AuthLogin();
        Session::put('admin_email',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
    public function all_user(){
        $this->AuthLogin();
        $user=DB::table('tb1_admin')->select('id','admin_email','created_at')->get();
        $manager=view('admin.all_user')->with('all_user',$user);
        return view('admin_layout')->with('admin.all_user',$manager);
    }
    public function add_user(){
        $this->AuthLogin();
        return view('admin.add_user');
    }
    public function save_user(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['admin_email']=$request->email;
        $data['password']=md5($request->pass);
        DB::table('tb1_admin')->insert($data);
        Session::put('message','Đã thêm');
        return Redirect::to('add-user');
    }
    public function del_user($id){
        $this->AuthLogin();
        DB::table('tb1_admin')->where('id',$id)->delete();
        Session::put('message','Đã xóa');
        return Redirect::to('all-user');
    }
}
