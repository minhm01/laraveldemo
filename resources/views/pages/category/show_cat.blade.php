@extends('layout')
@section('product')
<h1 class="tit_mid">
	@foreach($cat_name as $key => $name)
        {{$name->category_name}}
    @endforeach
</h1>
<div class="clearfix"></div>
<ul class="list_prod_home" itemprop="offers" itemscope="" itemtype="http://schema.org/AggregateOffer">
	@foreach($cat_by_id as $key => $pro)
	<li class="col-md-4 col-sm-6 col-xs-6 col-480-12" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer"><div class="row"><div class="box_prod_home"><div class="sub_prod_home"><div class="name_prod_home " itemprop="name"><a href="{{URL::to('sanpham/'.$pro->product_id)}}" target="detailWindow" title="" class="h_663">{{$pro->product_name}}</a></div><div class="clearfix-13"></div> <div class="code_prod_home">Mã số: {{$pro->product_id}}</div> <div class="des_prod_home">{{$pro->product_content}}</div><div style="text-align: left;" class="price_prod_home">Giá: <span class="nb_price_prod_home">{{$pro->product_price}} VND</span><div class="clearfix"></div>(Đã bao gồm VAT)</div><div class="img_prod_home"><div><a itemprop="url" href="{{URL::to('sanpham/'.$pro->product_id)}}" target="detailWindow" class="h_663"><img class="w_100" itemprop="image" src="{{asset('public/upload/product/'.$pro->product_image)}}" alt="{{$pro->product_name}}" title="" style="height: 112.45px;"></a></div><div class="clearfix"></div><div class="km_prod_home"><img style="width: 100px; height: 60px; position: absolute; left: 0px; bottom: 10px;" src="{{asset('public/upload/product/khuyenmai.png')}}" alt="" align="middle"><span class="saletext"><strong>Tặng ngay 100.000 đồng</strong></span></div></div></div></div><meta itemprop="priceCurrency" content="VND"><meta itemprop="price" content="{{$pro->product_price}}"><meta itemprop="availability" content="https://schema.org/InStock"><meta itemprop="itemCondition" content="New"><div itemprop="seller" itemtype="http://schema.org/Organization" itemscope=""><meta itemprop="name" content="Sieu Thi Vien Thong"></div></div></li>	
	@endforeach
</ul>
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