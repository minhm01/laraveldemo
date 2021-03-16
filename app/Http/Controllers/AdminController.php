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
    public function index(){
        return view('admin_login');
    }
    public function show_dashboard(){
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
        Session::put('admin_email',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}
