@extends('layout')
@section('product')
@foreach($product as $key => $product)
<h1 class="tit_mid" itemprop="name">{{$product->product_name}}</h1>
<div class="clearfix clearfix-20"></div>
<div class="content_prod_detail">
    <a href="{{URL::to('trangchu')}}">Trang Chủ</a>&gt;&gt;<a title="{{$product->category_name}}" href="{{URL::to('/danh-muc-san-pham/'.$product->category_id)}}">{{$product->category_name}}</a> &gt;&gt; <a title="{{$product->product_name}}" href="{{URL::to('sanpham/'.$product->product_id)}}">{{$product->product_name}}</a>
    <div class="clearfix-20"></div>
    <div class="row">
        <div class="col-lg-600 col-sm-6 col-xs-12 code_prod_articles">Mã số:{{$product->product_id}}</div> 
        <div class="clearfix"></div>
        <div class="col-lg-10 col-sm-12 col-xs-12">
            <img class="w_100" itemprop="image" src="{{URL::to('public/upload/product/'.$product->product_image)}}" alt="{{$product->product_name}}" title="{{$product->product_name}}">
        </div>
        <div class="col-lg-550 col-sm-12 col-xs-12">
            <div class="des_detail">
            </div>
            <div class="clearfix clearfix-13"></div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="conten_prod_t" itemprop="description">
        <p><span style="color: #ff0000;"><strong>{{$product->product_name}}</strong></span></p>
        {{$product->product_content}}
    </div>
    <div class="clearfix"></div>
    <div class=" price_prod_articles">Giá: <span class="nb_price_prod_home" itemprop="price">{{$product->product_price}} VND</span></div>	
    <div class="clearfix-30"></div><div class="clearfix-20"></div>
    <form class="form-inline form-ythich" method="post" action="{{URL::to('/save-cart')}}">
    {{csrf_field()}}
        <div class="box-soluong">
            <p>Số lượng :</p>
            <div class="clearfix-10"></div>
            <p><span><input type="number" value="1" id="arMenge" name="quantity"></span>
            <input type="hidden" name="pro_id" value="{{$product->product_id}}">
            <span><input type="submit" name="add_cart" id="add_cart" style="display:none"><a href="#" class="bg-cart-add" onClick="add_cart.click()"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Thêm vào giỏ</a></span>
            <span><a class="bg-buy-add" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Mua ngay</a></span></p>

        </div>
    </form>
    <div class="clearfix"></div>
    <br>

    <div class="clearfix"></div>	
    <meta itemprop="url" content="{{URL::to('sanpham/'.$product->product_id)}}">
    <link itemprop="availability" href="http://schema.org/InStock">
    <meta itemprop="priceCurrency" content="VND">
    <meta itemprop="itemCondition" content="New">
    <div itemprop="seller" itemtype="http://schema.org/Organization" itemscope="">
        <meta itemprop="name" content="Sieu Thi Vien Thong">
    </div>
</div>
<div class="clearfix clearfix-20"></div>
<div class="capiTitle">
    Sản phẩm liên quan
</div>
<div class="clearfix clearfix-20"></div>
<div class="carousel slide row" data-ride="carousel" data-type="multi" data-interval="2000" id="fruitscarousel">
    <div class="carousel-inner">
        <div class="item active">
        @foreach($rela as $key => $lq)
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="code_prod_home">Mã số: {{$lq->product_id}}</div>
                <div class="price_prod_home">Giá: <span class="nb_price_prod_home">{{$lq->product_price}} VND</span></div>
                <div class="img_prod_home">
                    <a title="{{$lq->product_name}}" href="{{URL::to('sanpham/'.$lq->product_id)}}" class="h_663">
                        <img class="w_100" src="{{URL::to('public/upload/product/'.$lq->product_image)}}" alt="{{$lq->product_name}}" style="height: 112.45px;">
                    </a>
                </div>
                <div class="clearfix"></div>
                <div class="sub_prod_home">
                    <div class="name_prod_home" style="margin-bottom: 10px;">
                        <a title="{{$lq->product_name}}" href="{{URL::to('public/upload/product/'.$lq->product_image)}}" alt="{{$lq->product_name}}">
                            {{$lq->product_name}}
                    </div>
                    <div class="clearfix clearfix-5"></div>
                </div>
            </div>		
        @endforeach    
        </div>
        <a class="left carousel-control" href="#fruitscarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#fruitscarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a> 
    </div>
@endforeach
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