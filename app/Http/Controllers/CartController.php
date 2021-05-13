<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();
class CartController extends Controller
{
    public function save_cart(Request $request){
        $pro_id = $request->pro_id;
        $quantity = $request->quantity;
        $product = DB::table('tb1_product')->where('product_id',$pro_id)->first();
        $data['id'] = $pro_id;
        $data['qty'] = $quantity;
        $data['name'] = $product->product_name;
        $data['price'] = $product->product_price;
        $data['weight'] = "1";
        $data['options']['image'] = $product->product_image;
        Cart::add($data);
        Session::put('message','Đã thêm vào giỏ');
        return back();
        //return Redirect::to('/show_cart');        
    }
    public function show_cart(){
        $cat_pro = DB::table('tb1_category_product')->where('category_stt','1')->get();
        $brand_pro = DB::table('tb1_brand_product')->where('brand_stt','1')->get();
        return view('pages.cart.cart')->with('category',$cat_pro)->with('brand',$brand_pro);
    }
    public function del_item($id){
        Cart::remove($id);
        return Redirect::to('/show_cart');        
    }
    public function del_cart(){
        Cart::destroy();
        return Redirect::to('/show_cart');
    }
    public function update_cart(Request $request){
        $id=$request->rowid;
        $qty=$request->qty;
        Cart::update($id,$qty);
        return Redirect::to('/show_cart');
    }
    public function checkout(){
        $cat_pro = DB::table('tb1_category_product')->where('category_stt','1')->get();
        $brand_pro = DB::table('tb1_brand_product')->where('brand_stt','1')->get();        
        return view('pages.cart.checkout')->with('category',$cat_pro)->with('brand',$brand_pro);
    }
    public function buyout(Request $request){
        $data = array();
        $data['c_name']=$request->name;
        $data['c_address']=$request->address;
        $data['c_phone']=$request->phone;
        $data['c_email']=$request->email;
        $data['note']=$request->note;
        $data['total']=Cart::total();
        $data['payment']=$request->payment;
        $cart = array(); 
        $cart = Cart::content();
        if($order = DB::table('tb1_order')->insertGetId($data))
        {            
            foreach($cart as $crt)
            {
                $cnt = array();
                $cnt['order_id']=$order;
                $cnt['product_name']=$crt->name;
                $id=$crt->id;
                $cnt['product_id']=$id;
                $img = DB::table('tb1_product')->where('product_id',$id)->value('product_image');
                $cnt['product_image']=$img;
                $cnt['qty']=$crt->qty;
                $cnt['sum']=($crt->price)*($crt->qty);
                DB::table('tb1_order_detail')->insert($cnt);                                
            }
            Session::put('message','Đã đặt hàng');
            Cart::destroy();
        }     
        return Redirect::to('/trangchu');
    }
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function all_order(){
        $this->AuthLogin();
        $all_order=DB::table('tb1_order')->get();
        $order_dets=DB::table('tb1_order_detail')->get();
        $manager=view('admin.all_order')->with('all_order',$all_order)->with('ord_dets',$order_dets);
        return view('admin_layout')->with('admin.all_order',$manager);
    }
/*
0 đặt hàng
1 chuyển khoản
2 đang giao
3 hoàn thành
*/
    public function stt_order($id, $stt){
        $this->AuthLogin();
        DB::table('tb1_order')->where('order_id',$id)->update(['status' => $stt]);
        return Redirect::to('all-order');
    }
}
