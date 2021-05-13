<?php
$msg = Session::get('message');
if($msg){
    echo '<script type="text/javascript">alert("'.$msg.'")</script>';
    Session::put('message',null);
}
?>
<!DOCTYPE html>
<html lang="vi-VN"><link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<style lang="en" type="text/css" id="dark-mode-custom-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-style"></style>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    	
	<title>NOBICODE - Advanced solution - Dedicate life</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<meta name="description" content="Công ty TNHH giáo dục và Công nghệ NOBICODE (NOBICODE EDUCATION AND TECHNOLOGY COMPANY LIMITED) với đội ngũ nhân sự trẻ năng động, nhiệt huyết, nhạy bén, chuyên nghiệp, được đào tạo bài bản và tổ chức công ty khoa học." property="og:description">
	<meta name="keywords" content="Camera,camera ip,camera quan sat,tong dai,tong dai noi bo,pabx,bao trom,may dinh vi GPS,bo dam,may chieu,may in,may fax,cap quang,cap mang,router,switch,wireless">
	<meta content="NOBICODE - Advanced solution - Dedicate life" property="og:title">
	<meta content="product" property="og:type">
	<meta content="NOBICODE" property="og:site_name">
	<meta content="vi_VN" property="og:locale">
	<meta name="author" content="stvt">
	<meta name="Revisit-after" content="1 day">
	<meta content="index, follow" name="robots">
	<meta itemprop="description" content="Công ty TNHH giáo dục và Công nghệ NOBICODE (NOBICODE EDUCATION AND TECHNOLOGY COMPANY LIMITED) với đội ngũ nhân sự trẻ năng động, nhiệt huyết, nhạy bén, chuyên nghiệp, được đào tạo bài bản và tổ chức công ty khoa học.">

	
	<meta itemprop="name" content="NOBICODE | nobicode.net">
	
	<link rel="canonical" href="{{URL::to('trangchu')}}">	<meta itemprop="url" content="">
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/setmedia.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/slider_full.css')}}" rel="stylesheet"><!-- slider_full -->
    <link href="{{asset('public/frontend/css/related_product.css')}}" rel="stylesheet">

    <script type="text/javascript" src="{{asset('public/frontend/js/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/nav-menu5.js')}}"></script><!--menu-->

	<script type="text/javascript" src="{{asset('public/frontend/js/style-img.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jssor.core.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jssor.slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jssor.utils.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/slider_full.js')}}"></script><!-- slider_full -->
	<script type="text/javascript" src="{{asset('public/frontend/js/related_product.js')}}"></script>
</head>
<body id="top">
<header>
    <div class="bg_header_mobile">
        <div class="container">
            <div class="row_pc">
                <div class="  visible-xxs menu_mb">
                    <button class="nav-toggle">
                        <div class="icon-menu">
                            <span class="line line-1"></span>
                            <span class="line line-2"></span>
                            <span class="line line-3"></span>
                        </div>
                    </button>
                    <div class="" style="width: 100%; text-align: center">
                        <a href="{{URL::to('trangchu')}}" title="NOBICODE"><img style="max-height: 60px; max-width: 70%" src="{{URL::to('public/frontend/images/logo.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<font color="white" ,="" size="+1"><marquee direction="left" style="background:red" scrollamount="18">Công ty TNHH Giáo dục &amp; Công Nghệ Nobicode xin kính chào quý khách!!! &nbsp; &nbsp; &nbsp; &nbsp; Thời gian hoạt động: (T2-CN) &nbsp; &nbsp; &nbsp; &nbsp; Sáng: 8h00 - 12h00 &nbsp; &nbsp; &nbsp; &nbsp; Chiều: 13h00 - 17h30</marquee></font>
    <div class="clearfix"></div>
    <div class="sticky-header fixed">
        <div class="bg_mid_top">
            <div class="container">
                <div class="row_pc">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 hidden-xxs">
                            <a href="{{URL::to('trangchu')}}" class="logo_pc">
                                <img class="w_100" src="{{URL::to('public/frontend/images/logo.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-7 col-sm-6 col-xs-12">                            
							<form id="inputform" name="inputform" method="get" onsubmit="return checkSearchForm();" action="{{URL::to('/search/str')}}">
                            
								<div class="input-group group_search">	
									<input id="str" name="str" type="text" class="form-control icon_bg" placeholder="Tìm Sản phẩm">
									<span class="input-group-btn z_butt_search">
										<button class="btn btn-default butt_search" type="image"></button>
									</span>
								</div>
							</form>	                            
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12   visible-sm visible-md visible-lg">
                            <ul class="list_link_top pull-right">
                                <li><a target="ex-fb" href="http://www.facebook.com/sharer.php?u={{URL::to('trangchu')}}" class="fa fa-facebook bg_3b5998 icon_link_top"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="bg_menu">
            <div class="container">
                <div class="row_pc">
                    <div class="menu_main">
                        <nav class="nav is-fixed" role="navigation" style="position: relative;z-index: 5;">
                            <div class="wrapper wrapper-flush">
                                <div class="nav-container">
                                    <ul class="nav-menu menu">
										<li class="menu-item"><a class="menu-link" id="home" href="{{URL::to('trangchu')}}" alt="Trang chủ">Trang Chủ</a></li>
										<li class="menu-item"><a class="menu-link" id="uberuns" href="{{URL::to('show_cart')}}" alt="Giỏ hàng">Giỏ hàng</a></li>
										<li class="menu-item"><a class="menu-link" id="services" href="https://www.sieuthivienthong.com/services.html" alt="Dịch vụ">Dịch vụ</a></li>
										<li class="menu-item"><a class="menu-link" id="rabatt" href="https://www.sieuthivienthong.com/rabatt.html" alt="Khuyến mãi">Khuyến mãi</a></li>
										<li class="menu-item"><a class="menu-link" id="help" href="https://www.sieuthivienthong.com/faq.html" alt="Trợ giúp Khách hàng">Hỗ trợ</a></li>
										<li class="menu-item"><a class="menu-link" id="sddd" href="https://www.sieuthivienthong.com/map.html" alt="Sơ đồ đường đi ">Sơ đồ đường đi </a></li>
										<li class="menu-item"><a class="menu-link" id="reseller" href="https://www.sieuthivienthong.com/reseller.html" alt="Đại lý">Đại lý </a></li>
										<li class="menu-item"><a class="menu-link" id="contact" href="https://www.sieuthivienthong.com/contact.html" alt="Liên hệ">Liên hệ</a></li>
								   </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
	    <div class="slider_full">
        <div id="slider1_container" style="position: relative; margin: 0px auto; top: 0px; left: 0px; width: 1349px; height: 373.723px; overflow: hidden;">
        <div style="position: absolute; top: 0px; left: 0px; width: 1350px; height: 374px; transform-origin: 0px 0px; transform: scale(0.999259);"><div class="" style="position: relative; margin: 0px auto; top: 0px; left: 0px; width: 1350px; height: 374px; overflow: visible;"><div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1350px; height: 374px; overflow: hidden; z-index: 0;"><div debug-id="slide_container" style="position: absolute; z-index: 0; left: -1350px; top: 0px;"></div></div><div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1350px; height: 374px; overflow: hidden; z-index: 0;" debug-id="slide-board"><div style="width: 1350px; height: 374px; top: 0px; left: 0px; position: absolute; background-color: rgb(0, 0, 0); opacity: 0;"></div>
			<div debug-id="slide-0" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="{{URL::to('public/frontend/images/logo.png')}}" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-1" style="width: 1350px; height: 374px; top: 0px; left: 0px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="{{URL::to('public/frontend/images/logo.png')}}" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-2" style="width: 1350px; height: 374px; top: 0px; left: 1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (11).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-3" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (12).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-4" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (13).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-5" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (14).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-6" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (15).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-7" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (16).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-8" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (17).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-9" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (18).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-10" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (19).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-11" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (2).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-12" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (3).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-13" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (4).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-14" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (5).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-15" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (6).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-16" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (7).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-17" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (8).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-18" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);"><a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="./Camera,camera ip - SIEU THI VIEN THONG_files/hinh_baner_web_3-2018 (9).jpg" style="transform: perspective(2000px);"></a><div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div>	
            </div><div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 422.5px; width: 505px; height: 19px;">
                
            <div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 0px; top: 0px;" class=""></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 27px; top: 0px;" class="av"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 54px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 81px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 108px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 135px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 162px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 189px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 216px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 243px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 270px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 297px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 324px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 351px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 378px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 405px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 432px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 459px; top: 0px;"></div><div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 486px; top: 0px;"></div></div><span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 159.5px; left: 0px; display: none;">

            </span><span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 159.5px; right: 0px; display: none;">

            </span></div></div></div>
    </div>
	</header><article>
    <div class="clearfix clearfix-23 visible-xs visible-sm visible-md visible-lg"></div>
    <div class="container article-page">
        <div class="row_pc">
		@yield('left_menu')
            			
<script type="text/javascript">
$(function() {
		
		$( "li.cat" ).mouseover(function(e) {		
			$(".sub-categorys").css("display","none");	
			thisId = $(this).attr("id");
			
			catid = thisId.substr(3);
			subcatdiv = "sub_" + catid;	
			
			if($("#" + subcatdiv).length > 0){	
				var top = $('html').offset().top;
				$("#" + subcatdiv).css("display","block"); 		
				//$("#" + subcatdiv).css("top",top); 		
			}
			
		});
		jQuery( "ul.list_menu_left" ).on( "click", "i.cat-parent", function() {
			licatid = jQuery(this).parent().attr("id");
			catid = licatid.substring(3);
			if(jQuery(this).hasClass("open")){
				jQuery(this).removeClass("fa-angle-up");
				jQuery(this).removeClass("open");
				jQuery(this).addClass("fa-angle-down");
				jQuery(".catsubs_" + catid).removeClass("open");
			}else{				
				if($(this).parent().data("subsloaded") != "1"){

					var url  = "/index.php?page=ajaxac&type=loadsubmenu&cat=" + catid ;
					jQuery(".catsubs_" + catid).empty().load(url);				
					jQuery(this).parent().attr("data-subsloaded", "1");
				}
				jQuery(".catsubs_" + catid).addClass("open");
				jQuery(this).removeClass("fa-angle-down");
				jQuery(this).addClass("fa-angle-up");
				jQuery(this).addClass("open");
			}
		});
		jQuery( "ul.list_menu_left" ).on( "click", "a.load-mainmenu", function() {
			var url  = "/index.php?page=ajaxac&type=loadmainmenu";
			jQuery(".list_menu_left").empty().load(url);
			return false;
		});
		
		
});	

</script>
            <div class="col-md-7 col-sm-6 col-sm-12">
                <div class="row">
					<div class="home_mid">
						<div class="  visible-xxs dmmenu_mb">
							<button class="nav-toggle" title="Danh mục sản phẩm">
								<div class="icon-menu">
									<span class="line line-1"></span>
									<span class="line line-2"></span>
									<span class="line line-3"></span>
								</div>
							</button>
						</div>
                        @yield('product') 
					</div>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 col-sm-12">
                <div class="row">
                    <div class="home_right">
				<h2 class="tit_right visible-sm visible-md visible-lg" style="text-align: center;">
				Quảng cáo
			    </h2>
			<div class="clearfix visible-sm visible-md visible-lg"></div>
			<div class="quang_cao visible-sm visible-md visible-lg">
				<a class="box_qc" target="frsite" href="http://www.sieuthivienthong.com/may-do-than-nhiet-flus/1105/category.html" rel="nofollow"><img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/p_81.jpg" alt="" width="160" style="border: 2px solid #000080"></a><a class="box_qc" target="frsite" href="http://www.sieuthivienthong.com/may-cham-cong-van-tay-va-the-cam-ung-ronald-jack-dg-600id-12482.html" rel="nofollow"><img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/p_186.jpg" alt="" width="160" style="border: 2px solid #000080"></a><a class="box_qc" target="frsite" href="http://www.sieuthivienthong.com/may-chieu-sony-vpl-ex455-21848.html" rel="nofollow"><img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/p_187.jpg" alt="" width="160" style="border: 2px solid #000080"></a><a class="box_qc" target="frsite" href="http://www.sieuthivienthong.com/dien-thoai-ip-grandstream-gxp1625-13164.html" rel="nofollow"><img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/p_188.jpg" alt="" width="160" style="border: 2px solid #000080"></a><a class="box_qc" target="frsite" href="http://www.sieuthivienthong.com/2-port-101001000mbps--8-port-poe-switch-tenda-tef1110p-102w-24810.html" rel="nofollow"><img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/p_189.jpg" alt="" width="160" style="border: 2px solid #000080"></a><a class="box_qc" target="frsite" href="http://sieuthivienthong.com/camera-ip-robot-hong-ngoai-khong-day-4.0-megapixel-vantech-ai-v2010c-38017.html" rel="nofollow"><img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/p_191.jpg" alt="" width="160" style="border: 2px solid #000080"></a><a class="box_qc" target="frsite" href="http://sieuthivienthong.com/khung-phu-tong-dai-panasonic-kx-ns320-11102.html" rel="nofollow"><img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/p_192.jpg" alt="" width="160" style="border: 2px solid #000080"></a>			</div>
            <div class="clearfix clearfix-13 visible-sm visible-md visible-lg"></div>
				<h2 class="tit_right">
			Giải pháp kỹ thuật
		</h2>
		<div class="clearfix"></div>
		<ul class="list_dvkt">
			<li><div class="box_dvkt"><div class="name_dvkt"><a href="https://www.sieuthivienthong.com/lap-dat-camera-cho-sieu-thi/44/faqtech.html" target="_blank">Lắp đặt camera cho siêu thị</a></div><div class="clearfix"></div><div class="img_dvkt"><a href="https://www.sieuthivienthong.com/lap-dat-camera-cho-sieu-thi/44/faqtech.html" target="techWindow" onclick="openTech(&#39;/lap-dat-camera-cho-sieu-thi/44/faqtech.html&#39;)"><img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/45.jpg" border="0" width="140px;" alt="Lắp đặt camera cho siêu thị"></a></div></div></li>
		</ul>
        <div class="clearfix clearfix-13"></div>
	    <div class="clearfix clearfix-13"></div>
		<h2 class="tit_right pd_tktc">
			Thống kê truy cập
		</h2>
		<div class="thongke_truycap">
			66.330.059	
		</div>
	</div>
</div>
<script type="text/javascript">
	function updateFilter(filterId, isMulti, val){
				return $("#filterform").submit();
	}
</script>		  
<!------------------------------------------ ende content right -------------->	                </div>
            </div>
            <div class="clearfix clearfix-20"></div>
            <div class="ma-onsaleproductslider-container module-top slider_logo_bot  visible-sm visible-md visible-lg">
                <div class="row">
					<div class="clearfix clearfix-13"></div>
					<div class="khachhang_tieubieu">KHÁCH HÀNG TIÊU BIỂU</div>
					<div class="clearfix clearfix-13"></div>
                    <ul class="owl owl-carousel owl-theme" style="opacity: 1; display: block;">
						<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 12928px; left: 0px; display: block;"><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Tong-dai-dien-thoai/2/category.html" target="khtb">Công ty CP BIBICA</a><div class="clearfix"></div>Hệ Thống Tổng đài nội bộ, hệ thống VoIP </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="{{URL::to('trangchu')}}#">CÔNG TY TNHH MTV XỔ SỐ KIẾN THIẾT KIÊN GIANG</a><div class="clearfix"></div>HỆ THỐNG CAMERA GIÁM SÁT </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/THIET-BI-MANG/111/category.html" target="khtb">Trường Đại Học Hùng Vương</a><div class="clearfix"></div>Hệ Thống mạng máy tính </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="{{URL::to('trangchu')}}#">TRUNG TÂM ĐÀO TẠO QUỐC TẾ (ITEC)- TRƯỜNG ĐH KHOA HỌC TỰ NHIÊN</a><div class="clearfix"></div>HỆ THỐNG CAMERA GIÁM SÁT </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Camera-quan-sat/67/category.html" target="khtb">Công ty CP BIBICA</a><div class="clearfix"></div>Hệ Thống Camera Quan Sát </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="{{URL::to('trangchu')}}#">CÔNG TY CP XI MĂNG NGHI SƠN</a><div class="clearfix"></div>HỆ THỐNG CAMERA GIÁM SÁT </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="{{URL::to('trangchu')}}#">BỆNH VIỆN QUỐC TẾ CHẤN THƯƠNG CHỈNH HÌNH SÀI GÒN</a><div class="clearfix"></div>HỆ THỐNG CAMERA GIÁM SÁT </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Camera-quan-sat/67/category.html" target="khtb">Chợ Nông Sản Thủ Đức</a><div class="clearfix"></div>Hệ Thống Camera Quan Sát </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Camera-quan-sat/67/category.html" target="khtb">Công ty CP May Việt Thắng</a><div class="clearfix"></div>Hệ Thống Camera Quan Sát </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="{{URL::to('trangchu')}}#">CÔNG TY TNHH ĐIỀU HÒA REE VIỆT NAM</a><div class="clearfix"></div>HỆ THỐNG TỔNG ĐÀI ĐỆN THOẠI </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="{{URL::to('trangchu')}}#">CÔNG TY TNHH PHÁT TRIỂN GIÁO DỤC VƯƠNG QUỐC ANH</a><div class="clearfix"></div>HỆ THỐNG CAMERA GIÁM SÁT </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Camera-quan-sat/67/category.html" target="khtb">Chợ Bình Điền</a><div class="clearfix"></div>Hệ Thống Camera Quan Sát </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="{{URL::to('trangchu')}}#">CÔNG TY CP ĐẦU TƯ VÀ PHÁT TRIỂN BẤT ĐỘNG SẢN AN GIA</a><div class="clearfix"></div>HỆ THỐNG TỔNG ĐÀI ĐỆN THOẠI </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Tong-dai-dien-thoai/2/category.html" target="khtb">Khách sạn NORFORK</a><div class="clearfix"></div>Hệ Thống Tổng Đài Nội Bộ </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Camera-quan-sat/67/category.html" target="khtb">Công ty ISUZU</a><div class="clearfix"></div>Hệ Thống Camera Quan Sát </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="{{URL::to('trangchu')}}#">CÔNG TY CP ĐẦU TƯ XÂY DỰNG SỐ 5</a><div class="clearfix"></div>HỆ THỐNG CAMERA GIÁM SÁT, MẠNG, TỔNG ĐÀI </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="{{URL::to('trangchu')}}#">CÔNG TY TNHH ĐẦU TƯ ĐỊA ỐC THÀNH PHỐ-CITYLAND</a><div class="clearfix"></div>HỆ THỐNG CAMERA QUAN SÁT, TỔNG ĐÀI ĐIỆN THOẠI, MẠNG </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Camera-quan-sat/67/category.html" target="khtb">UBND Quận Gò Vấp</a><div class="clearfix"></div>Hệ Thống Camera Quan Sát </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Tong-dai-dien-thoai/2/category.html" target="khtb">VP Phía Nam Bộ Tài Chính</a><div class="clearfix"></div>Hệ Thống Tổng Đài Nội Bộ </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="{{URL::to('trangchu')}}#">CÔNG TY TNHH SÂN GOLF PALM</a><div class="clearfix"></div>HỆ THỐNG ÂM THANH THÔNG BÁO </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Camera-quan-sat/67/category.html" target="khtb">Trường Quốc Tế Mỹ</a><div class="clearfix"></div>Hệ Thống Camera Quan Sát </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="{{URL::to('trangchu')}}#">CÔNG TY CỔ PHẦN XI MĂNG CẨM PHẢ</a><div class="clearfix"></div>HỆ THỐNG CAMERA QUAN SÁT </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Camera-quan-sat/67/category.html" target="khtb">Trường Anh Ngữ Quốc Tế Elite</a><div class="clearfix"></div>Hệ Thống Camera Quan Sát </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Camera-quan-sat/67/category.html" target="khtb">Công ty May Sài Gòn</a><div class="clearfix"></div>Hệ Thống Camera Quan Sát </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Camera-quan-sat/67/category.html" target="khtb">Công Ty TNHH BIOFEED</a><div class="clearfix"></div>Hệ Thống Camera Quan Sát </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="{{URL::to('trangchu')}}#">CÔNG TY TNHH KSB VIỆT NAM</a><div class="clearfix"></div>HỆ THỐNG TỔNG ĐÀI IP-ANALOG PANASONIC </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Tong-dai-dien-thoai/2/category.html" target="khtb">Công Ty Thế Kỷ 21</a><div class="clearfix"></div>Hệ Thống Tổng Đài Nội Bộ </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Camera-quan-sat/67/category.html" target="khtb">Công Ty Phát Triển Nhà Thủ Đức</a><div class="clearfix"></div>Hệ Thống Camera Quan Sát </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Tong-dai-dien-thoai/2/category.html" target="khtb">Công Ty CP Đường Biên Hòa</a><div class="clearfix"></div>Hệ Thống Tổng Đài Nội Bộ </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Tong-dai-dien-thoai/2/category.html" target="khtb">Công Ty CP Truyền Thông Thanh Niên</a><div class="clearfix"></div>Hệ Thống Tổng Đài Nội Bộ </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Camera-quan-sat/67/category.html" target="khtb">Ngân hàng Vietcombank</a><div class="clearfix"></div>Hệ Thống Camera quan sát </div> </div></li></div><div class="owl-item" style="width: 202px;"><li class="onsaleproductslider-item item"><div class="item-inner"><div class="logo_bot"><a class="h_677" href="http://www.sieuthivienthong.com/Camera-quan-sat/67/category.html" target="khtb">Công Ty CP Thức Ăn NOVA</a><div class="clearfix"></div>Hệ Thống Camera Quan Sát </div> </div></li></div></div></div>			        <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev">prev</div><div class="owl-next">next</div></div></div></ul>
                </div>
				                <script type="text/javascript">
                    $jq(document).ready(function () {
                        $jq(".ma-onsaleproductslider-container .owl").owlCarousel({
                            autoPlay: false,
                            items: 5,
                            itemsDesktop: [1199, 4],
                            itemsDesktopSmall: [980, 3],
                            itemsTablet: [768, 2],
                            itemsMobile: [479, 1],
                            slideSpeed: 1000,
                            paginationSpeed: 3000,
                            rewindSpeed: 3000,
                            navigation: true,
                            stopOnHover: true,
                            pagination: false,
                            scrollPerPage: true,
                        });
                    });
                </script>

                <script type="text/javascript">
                    if (typeof MA == 'undefined') MA = {};
                    MA.QuickView = {
                        CATEGORY_ENABLE: 'true',
                        BASE_URL: '',
                        PARENT_ELEMENT: 'item-inner',
                        CHILDREN_ELEMENT: 'actions'
                    };
                    initQuickButton('.ma-newproductslider-container');
                    initQuickButton('.ma-onsaleproductslider-container');
                    initQuickButton('.category-tab-container');
                    initQuickButton('.ma-featuredproductslider-container');
                </script>

            </div>

            <div class="clearfix  visible-sm visible-md visible-lg"></div>
            
        
        </div>
    
</article>
<div class="clearfix"></div>
<footer class="footer">

    <div class="main_footer">
        <div class="container">
            <div class="row_pc">
                <div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6 col-480-12">
                        <div class="tit_footer">
                            Công ty CP Viễn Thông Á Châu
                        </div>
                        <div class="clearfix"></div>
						<div class="txt_boz">
							Giấy phép kinh doanh số 4103006445 do Sở Kế Hoạch và Đầu Tư Tp.HCM cấp ngày 17/04/2007
						</div>	
						<div class="clearfix"></div>
                        <div class="contact_company_ft">
                            Địa chỉ: 92K Nguyễn Thái Sơn, Phường 3, Quận Gò Vấp, Tp.HCM
                            <div class="clearfix clearfix-5"></div>
                            Điện thoại: ‎<a style="color: #FFFFFF" href="tel:(028) 7300 1535">(028) 7300 1535</a>
                            <div class="clearfix clearfix-5"></div>
                            Fax: (028) 35 88 63 56
                            <div class="clearfix clearfix-5"></div>
                            Email: info@sieuthivienthong.com
                        </div>

                        <div class="clearfix"></div>
                        
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 col-480-12">
                        <div class="pd_left_lg_15">
                            <div class="tit_footer">
                                Thông tin công ty
                            </div>
                            <div class="clearfix"></div>
                            <ul class="menu_ft">
                                <li><a href="https://www.sieuthivienthong.com/info.html" alt="Giới thiệu">Giới thiệu</a></li>
                                <li><a href="https://www.sieuthivienthong.com/map.html" alt="Sơ đồ đường đi ">Sơ đồ đường đi</a></li>
								<li><a href="https://www.sieuthivienthong.com/contact.html" alt="Liên hệ">Liên hệ</a></li>
                            </ul>
                        </div> 
                    </div>
					<div class="col-md-3 col-sm-3 col-xs-6 col-480-12">
                        <div class="pd_left_lg_15">
                            <div class="tit_footer">
                                Chính sách công ty
                            </div>
                            <div class="clearfix"></div>
                            <ul class="menu_ft">
                                <li>
                                    <a href="https://www.sieuthivienthong.com/policy.html#exchangePolicyF"> Chính sách bán hàng</a>
                                </li>
                                <li>
                                    <a href="https://www.sieuthivienthong.com/policy.html#warrantyPolicyF">Chính sách bảo hành</a>
                                </li>
                                <li>
                                    <a href="https://www.sieuthivienthong.com/policy.html#exchangePolicyF">Chính sách đổi trả</a>
                                </li>
                                <li>
                                    <a href="https://www.sieuthivienthong.com/policy.html#securityPolicyF">Chính sách bảo mật thông tin</a>
                                </li>
                                <li>
                                    <a href="https://www.sieuthivienthong.com/policy.html#paymentMethodF">Thông tin chuyển khoản</a>
                                </li>
                            </ul>
                        </div>
                    </div>
					<div class="col-md-3 col-sm-3 col-xs-6 col-480-12">
                        <div class="pd_left_lg_15">
							<div class="tit_footer">
							</div>
							<div class="txt_boz">
                                Hỗ thợ thanh toán
                            </div>
							<img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/ho_tro_thanh_toan.png" border="0">
							
                            <div class="clearfix"></div>
							
							<div class="txt_boz">
                                Chứng nhận
                            </div>
							<a href="http://online.gov.vn/CustomWebsiteDisplay.aspx?DocId=764" target="tmdt">
								<img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/dathongbao1.png" border="0">
							</a>		
							
                            <div class="clearfix"></div>
							
							<div class="tit_footer">
                                Chia sẻ Mạng xã hội
                            </div>
                            <div class="clearfix"></div>
							<ul class="list_link_ft">
								<li>
									<a class="icon_link_ft fa fa-facebook" target="ex-fb" href="http://www.facebook.com/sharer.php?u={{URL::to('trangchu')}}"></a>	
								</li>
								<li>
									<a class="icon_link_ft fa fa-twitter" href="https://twitter.com/vienthong762" target="ex-twitter"></a>
								</li>
								<li>
									<a class="icon_link_ft fa fa fa-rss" href="https://www.sieuthivienthong.com/rss.html" target="ex-rss"></a>
								</li>
							   
							</ul>
							
							
							
							
						</div>
                    </div>
					
					<div class="clearfix clearfix-5"></div>
					 <div class="txt_boz" style="text-align: center;">	
						© Copyright <span id="copyright-year">2006 - 2021</span> by sieuthivienthong.com. All Rights Reserved.
					</div>		
						
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    


    <script type="text/javascript">
        if (window.innerWidth > 320) {
            $(window).scroll(function () {
                if ($(window).scrollTop() >= 36) {
                    $('.sticky-header').addClass('fixed');
                }
                else {
                    $('.sticky-header').removeClass('fixed');
                }
            });
        }

        if (window.innerWidth > 320) {
            $(window).scroll(function () {
                if ($(window).scrollTop() >= 36) {
                    $('.sticky-header').addClass('fixed');
                }
                else {
                    $('.sticky-header').removeClass('fixed');
                }
            });
        }

        /* When the user clicks on the button,
         toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</footer>
<script>
window.addEventListener('load', function() {
  jQuery('[href^="tel:"]').click(function(){ 
    gtag('event', 'click', {'event_category': 'Hotline','event_label':jQuery(this).attr('href').replace('tel:','')});
  }) 
  jQuery('#href_buy2').click(function(){
gtag('event','click',{'event_category':'Muangay','event_label': jQuery('#cartarticles td a').text()})
})

}) 
</script>
<div style="position:fixed;right: 10px;bottom: 30px;"><a href="tel:(028) 7300 1535"><img style="width: 50px;" src="./Camera,camera ip - SIEU THI VIEN THONG_files/index_nut_call_3.gif" <="" a=""></a></div><a href="tel:(028) 7300 1535">

</a><script type="text/javascript" id="">if(-1!=window.location.href.indexOf("xacnhanthongtin")){var price=0;jQuery("#cartarticles tbody tr").each(function(){var a=parseFloat(jQuery("td:last-child",this).text().replace(/[VND.]/g,"").trim());price+=a});localStorage.setItem("cValue",JSON.stringify(price))}-1!=window.location.href.indexOf("htthanhtoan")&&(price=JSON.parse(localStorage.getItem("cValue")),window.dataLayer=window.dataLayer||[],window.dataLayer.push({cValue:price,event:"purchase_success"}));</script></body></html>