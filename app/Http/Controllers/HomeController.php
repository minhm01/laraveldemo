<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    public function index(){
        $cat_pro = DB::table('tb1_category_product')->where('category_stt','1')->get();
        $brand_pro = DB::table('tb1_brand_product')->where('brand_stt','1')->get();
        $product = DB::table('tb1_product')->where('product_stt','1')->get();  
        return view('pages.home')->with('category',$cat_pro)->with('brand',$brand_pro)->with('product',$product);
    }
    public function search(Request $string){
        $str=$string->str;
        $srch_pro = DB::table('tb1_product')->where('product_name','like','%'.$str.'%')->orWhere('product_content','like','%'.$str.'%')->get();
        $cat_pro = DB::table('tb1_category_product')->where('category_stt','1')->get();
        $brand_pro = DB::table('tb1_brand_product')->where('brand_stt','1')->get();        
        return view('pages.home')->with('category',$cat_pro)->with('brand',$brand_pro)->with('product',$srch_pro);
    }
    
}
