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
            <div style="position: absolute; top: 0px; left: 0px; width: 1350px; height: 374px; transform-origin: 0px 0px; transform: scale(0.999259);">
                <div class="" style="position: relative; margin: 0px auto; top: 0px; left: 0px; width: 1350px; height: 374px; overflow: visible;">
                    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1350px; height: 374px; overflow: hidden; z-index: 0;">
                        <div debug-id="slide_container" style="position: absolute; z-index: 0; left: -1350px; top: 0px;"></div>
                    </div>
                    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1350px; height: 374px; overflow: hidden; z-index: 0;" debug-id="slide-board">
                        <div style="width: 1350px; height: 374px; top: 0px; left: 0px; position: absolute; background-color: rgb(0, 0, 0); opacity: 0;"></div>
			            <div debug-id="slide-0" style="width: 1350px; height: 374px; top: 0px; left: -1350px; position: absolute; overflow: hidden; transform: perspective(2000px);">
                            <a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="{{URL::to('images/1.jpg')}}" style="transform: perspective(2000px);"></a>
                            <div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
                        </div>
                        <div debug-id="slide-1" style="width: 1350px; height: 374px; top: 0px; left: 0px; position: absolute; overflow: hidden; transform: perspective(2000px);">
                            <a href="{{URL::to('trangchu')}}" style="transform: perspective(2000px);"><img u="image" src="{{URL::to('images/3.jpg')}}" style="transform: perspective(2000px);"></a>
                            <div style="width: 1350px; height: 374px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
                        </div>                        
                    </div>
                    <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 422.5px; width: 505px; height: 19px;">                
                        <div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 0px; top: 0px;" class=""></div>
                        <div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align: center; line-height: 19px; color: white; font-size: 12px; left: 27px; top: 0px;" class="av"></div>
                    </div>
                    <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 159.5px; left: 0px; display: none;"></span>
                    <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 159.5px; right: 0px; display: none;"></span>
                </div>
            </div>
        </div>
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
                            <a class="box_qc" target="frsite" href="http://www.sieuthivienthong.com/may-do-than-nhiet-flus/1105/category.html" rel="nofollow"><img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/p_81.jpg" alt="" width="160" style="border: 2px solid #000080"></a><a class="box_qc" target="frsite" href="http://www.sieuthivienthong.com/may-cham-cong-van-tay-va-the-cam-ung-ronald-jack-dg-600id-12482.html" rel="nofollow"><img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/p_186.jpg" alt="" width="160" style="border: 2px solid #000080"></a><a class="box_qc" target="frsite" href="http://www.sieuthivienthong.com/may-chieu-sony-vpl-ex455-21848.html" rel="nofollow"><img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/p_187.jpg" alt="" width="160" style="border: 2px solid #000080"></a><a class="box_qc" target="frsite" href="http://www.sieuthivienthong.com/dien-thoai-ip-grandstream-gxp1625-13164.html" rel="nofollow"><img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/p_188.jpg" alt="" width="160" style="border: 2px solid #000080"></a><a class="box_qc" target="frsite" href="http://www.sieuthivienthong.com/2-port-101001000mbps--8-port-poe-switch-tenda-tef1110p-102w-24810.html" rel="nofollow"><img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/p_189.jpg" alt="" width="160" style="border: 2px solid #000080"></a><a class="box_qc" target="frsite" href="http://sieuthivienthong.com/camera-ip-robot-hong-ngoai-khong-day-4.0-megapixel-vantech-ai-v2010c-38017.html" rel="nofollow"><img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/p_191.jpg" alt="" width="160" style="border: 2px solid #000080"></a><a class="box_qc" target="frsite" href="http://sieuthivienthong.com/khung-phu-tong-dai-panasonic-kx-ns320-11102.html" rel="nofollow"><img class="w_100" src="./Camera,camera ip - SIEU THI VIEN THONG_files/p_192.jpg" alt="" width="160" style="border: 2px solid #000080"></a>			
                        </div>
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
            </div>
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
					<div class="col-md-4 col-sm-4 col-xs-6 col-480-12">
                        <div class="tit_footer">Công ty TNHH Giáo dục & Công Nghệ Nobicode</div>
                        <div class="clearfix"></div>						
                        <div style="color: #FFFFFF">
                            Trụ sở chính: 110 Đường số 2, Phường Trường Thọ, Quận Thủ Đức, TP. Hồ Chí Minh<br>
                            Chi nhánh: 174/33/23 Nguyễn Tư Giản, P.12, Quận Gò Vấp, TP. Hồ Chí Minh
                            <div class="clearfix clearfix-5"></div>
                            Điện thoại: (+84) 929.7777.27                            
                            <div class="clearfix clearfix-5"></div>
                            Email: info@nobicode.net
                        </div>
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
					<div class="col-md-2 col-sm-2 col-xs-6 col-480-12">
                        <div class="pd_left_lg_15">
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


</a><script type="text/javascript" id="">if(-1!=window.location.href.indexOf("xacnhanthongtin")){var price=0;jQuery("#cartarticles tbody tr").each(function(){var a=parseFloat(jQuery("td:last-child",this).text().replace(/[VND.]/g,"").trim());price+=a});localStorage.setItem("cValue",JSON.stringify(price))}-1!=window.location.href.indexOf("htthanhtoan")&&(price=JSON.parse(localStorage.getItem("cValue")),window.dataLayer=window.dataLayer||[],window.dataLayer.push({cValue:price,event:"purchase_success"}));</script></body></html>