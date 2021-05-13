@extends('layout')
@section('product')
<div class="col-md-12 col-sm-12 col-sm-12">
    <div class="row">
        <div class="home_mid">
            <h2 class="tit_mid">
                Đặt mua
            </h2>
            <div class="clearfix clearfix-20"></div>

                <table width="100%" id="cartarticles" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="2%"></th>
                            <th width="45%">Sản phẩm</th>
                            <th width="10%" align="center">Số lượng</th>
                            <th width="15%" align="right">Giá tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $cart = Cart::content(); $num=1; ?>
                    @foreach($cart as $key => $v_cart)
                        <tr id="tr_40344">
                            <td>{{$num}}</td>
                            <td><a href="{{URL::to('sanpham/'.$v_cart->id)}}">{{$v_cart->name}}</a></td>
                            <td align="center">{{$v_cart->qty}}</td>
                            <td align="right">{{($v_cart->qty)*($v_cart->price)}}</td>
                        </tr>
                        <?php $num++ ?>
                    @endforeach
                    </tbody>
                </table>
                <form action="{{URL::to('buyout/')}}" method="post">
                    Giỏ hàng của Quý khách có {{Cart::total()}} VND + (*) Phí vận chuyển, để mua hàng xin vui lòng điền các Thông tin sau
                    {{csrf_field()}}
                    <div class="col-md-6 headline">Thông tin khách hàng</div>
                    <div class="clearfix clearfix-13"></div>					
                    <div class="col-md-2 imp"><font color="#FF0000" size="2">*</font>&nbsp;Tên họ:</div>
                    <div class="col-md-6"><input type="text" name="name" id="name" maxlength="60" required></div>
                    <div class="clearfix  clearfix-5"></div>
                    <div class="col-md-2 imp"><font color="#FF0000" size="2">*</font>&nbsp;Địa chỉ:</div>
                    <div class="col-md-6"><textarea name="address" id="address" cols="60" rows="5" required></textarea></div>	
                    <div class="clearfix  clearfix-5"></div>		
                    <div class="col-md-2 imp"><font color="#FF0000" size="2">*</font>&nbsp;Điện thoại:</div>
                    <div class="col-md-3"><input type="tel" name="phone" id="phone" maxlength="20" required></div>
                    <div class="clearfix  clearfix-5"></div>
                    <div class="col-md-2 imp">Email:</div>
                    <div class="col-md-6"><input type="email" name="email" id="email" maxlength="100"></div>
                    <div class="clearfix clearfix-5"></div>
                    <div class="col-md-2 imp">Ghi chú:</div>
                    <div class="col-md-6"><textarea name="note" id="note" cols="60" rows="5"></textarea></div>	
                    <div class="clearfix  clearfix-5"></div>		
                    <div class="clearfix clearfix-20"></div>		
                    <div class="col-md-6 headline">Hình thức thanh toán</div>
                    <div class="clearfix clearfix-13"></div>		
                    <div class="col-md-7 imp"><input type="radio" name="payment" id="p_payment" value="b"><label for="p_payment">&nbsp;Chuyển khoản qua ngân hàng</label></div>
                    <div class="clearfix  clearfix-5"></div>
                    <div class="col-md-7 imp"><input type="radio" name="payment" id="u_payment" value="c"checked=""><label for="u_payment">&nbsp;Thanh toán khi nhận hàng</label></div>
                    <div class="clearfix clearfix-20"></div>
                    <input type="submit" name="buy" id="buy" style="display:none">
                    <div class="ctiet-prd pull-right" style="margin-right: 20px;"><a href="#" onClick="buy.click()" id="href_buy">Đặt mua</a></div>
                    <div class="ctiet-prd pull-right" style="margin-right: 20px;"><a href="{{URL::to('show_cart')}}" id="href_buy">Quay lại Giỏ hàng</a></div>
                    <div class="clearfix clearfix-5"></div>
                </form>	
            </div>
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