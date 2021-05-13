@extends('layout')
@section('product')
<div class="col-md-12 col-sm-12 col-sm-12">
	<div class="row">
		<div class="home_mid">
			<h2 class="tit_mid">
			Giỏ mua hàng
			</h2>
			<table width="100%" id="cartarticles" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th width="5%"></th>
						<th colspan="2">Sản phẩm</th>
						<th align="center" width="15%">Số lượng</th>
						<th align="right"width="14%">Giá tiền</th>
						<th width="5%"></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$cart = Cart::content(); $num=1; ?>
					@foreach($cart as $v_cart)
					<tr id="tr_19810">
						<td>{{$num}}</td>
						<td width="120px"><a href="{{URL::to('sanpham/'.$v_cart->id)}}"><img src="{{URL::to('public/upload/product/'.$v_cart->options->image)}}"  width="100px" height="100px" alt="{{$v_cart->name}}"></a></td>
						<td><a href="{{URL::to('sanpham/'.$v_cart->id)}}">{{$v_cart->name}}</a></td>
						<td align="center"><form method="post" action="{{URL::to('update-cart/')}}">
						{{csrf_field()}}
							<input type="number" value={{$v_cart->qty}} name="qty" style="width:45px" min="0">
							<input type="hidden" value={{$v_cart->rowId}} name="rowid">														
							<div class="ctiet-prd pull-right"><button type="submit" id="upd" name="upd"> <i class="fa fa-pencil"></i></button></div>			
							
							
						</form></td>
						<td align="right">{{($v_cart->qty)*($v_cart->price)}}</td>
						<td><div class="ctiet-prd pull-right">
							<a href="{{URL::to('/del-item/'.$v_cart->rowId)}}" onClick="return confirm('Xóa sản phẩm?')" class="removeArt" id="href_19810"> Xóa</a>
						</div></td>
					</tr>
					<?php $num++ ?>
					@endforeach
				</tbody>
			</table>
			<div class="ctiet-prd pull-right" style="margin-right: 20px;"><a href="{{URL::to('checkout/')}}" id="href_pay">Đặt hàng</a></div>
			<div class="ctiet-prd pull-right" style="margin-right: 20px;"><a href="{{URL::to('/trangchu')}}">Tiếp tục mua hàng</a></div>
			<div class="ctiet-prd pull-right" style="margin-right: 20px;"><a href="{{URL::to('del-cart/')}}" onClick="return confirm('Xóa giỏ hàng?')">Xóa giỏ hàng</a></div>
			
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="home_mid">
					<h2 class="tit_mid">
					Thông tin giỏ hàng
					</h2>
					<table width="100%" id="cartarticles" class="table table-striped table-bordered table-hover">
						<tbody>
							<tr>
								<td>Số sản phẩm</td>
								<td>{{Cart::count()}}</td>
							</tr>
							<tr>
								<td>Thành tiền</td>
								<td>{{Cart::total()}}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="clearfix-10"></div>					
	</div>
</div>
@endsection
@section('left_menu')
<div class="col-md-3 col-sm-3">
	<div class="row">
		<div class="home_left">
			<div class="menu_left">
				<h2 class="tit_left  visible-xs visible-sm visible-md visible-lg">
					<a href="https://www.sieuthivienthong.com/" title="Danh mục sản phẩm">Danh mục sản phẩm</a>
				</h2>
				<div class="clearfix  visible-sm visible-md"></div>
				<nav class="nav is-fixed" role="navigation" style="position: relative;z-index: 5;">
					<div class="wrapper wrapper-flush">
						<div class="nav-container">
							<ul class="list_menu_left">
								@foreach($category as $key => $cat)
								<li id="{{$cat->category_id}}" class="cat" data-subsloaded="0"><a href="{{URL::to('/danh-muc-san-pham/'.$cat->category_id)}}" title=""><i class="fa fa-book"></i> {{$cat->category_name}}</a><i class="cat-parent fa fa-angle-down"></i><ul class="catsubs_377"></ul></li>
								@endforeach
							</ul>
						</div>
					</div>			
				</nav>
			</div>
			<div class="menu_left">
				<h2 class="tit_left  visible-xs visible-sm visible-md visible-lg">
					<a href="https://www.sieuthivienthong.com/" title="Thương hiệu sản phẩm">Thương hiệu sản phẩm</a>
				</h2>
				<div class="clearfix  visible-sm visible-md"></div>
				<nav class="nav is-fixed" role="navigation" style="position: relative;z-index: 5;">
					<div class="wrapper wrapper-flush">
						<div class="nav-container">
							<ul class="list_menu_left">
								@foreach($brand as $key => $bra)
									<li id="{{$bra->brand_id}}" class="cat" data-subsloaded="0"><a href="{{URL::to('/thuong-hieu/'.$bra->brand_id)}}" title=""><i class="fa fa-suitcase"></i> {{$bra->brand_name}}</a><i class="cat-parent fa fa-angle-down"></i><ul class="catsubs_377"></ul></li>
								@endforeach
							</ul>
						</div>
					</div>			
				</nav>
			</div>
			<div class="clearfix clearfix-13 visible-sm visible-md visible-lg"></div>
			<div class="addleftblocks">
				<h2 class="tit_left">
					Hỗ trợ kinh doanh
				</h2>
				<div class="suppot_left">								
					<div class="box_support">Ms. Lê: 0916 514 469 <span class="number_support"></span><div class="clearfix"></div><a class="icon_support" href="skype:sieuthivienthong.com_kinhdoanh4?chat" style="display: inline;"><img src="./Camera,camera ip - SIEU THI VIEN THONG_files/sp_sky.png"></a> <div class="clear"></div></div><div class="clearfix"></div>
					<div class="box_support">Ms. Nhi:  0918 891 771 <span class="number_support"></span><div class="clearfix"></div><a class="icon_support" href="skype:live:vienthongachau14?chat" style="display: inline;"><img src="./Camera,camera ip - SIEU THI VIEN THONG_files/sp_sky.png"></a> <div class="clear"></div></div><div class="clearfix"></div>							
				</div>
				<div class="clearfix clearfix-13 visible-sm visible-md visible-lg"></div>
				<h2 class="tit_left">Hỗ trợ bảo hành kỹ thuật</h2>
				<div class="clearfix"></div>
				<div class="box_htbhkt"><img class="icon_htbhkt" src="./Camera,camera ip - SIEU THI VIEN THONG_files/icon_htbhkt.png" alt="">(028) 73 00 20 49</div>
				<div class="clearfix clearfix-13"></div>
				<h2 class="tit_left">Chăm sóc khách hàng</h2>
				<div class="clearfix"></div>
				<div class="box_htcskt"><img class="icon_htbhkt" src="./Camera,camera ip - SIEU THI VIEN THONG_files/icon_cskh.png" alt="">0916 287 068</div>
				<div class="clearfix clearfix-13"></div>
			</div>	
		</div>
	</div>
</div>
@endsection