$(function() {
    var html = $('html, body'),
        navContainer = $('.menu_main .nav-container'),
        navToggle = $('.menu_mb .nav-toggle'),
        navDropdownToggle = $('.menu_mb .has-dropdown');
		


    // Nav toggle
    navToggle.on('click', function(e) {
        var $this = $(this);
        e.preventDefault();
        $this.toggleClass('is-active');
        navContainer.toggleClass('is-visible');
        html.toggleClass('nav-open');
    });

    // Nav dropdown toggle
    navDropdownToggle.on('click', function() {
        var $this = $(this);
        $this.toggleClass('is-active').children('ul').toggleClass('is-visible');
    });

    // Prevent click events from firing on children of navDropdownToggle
    navDropdownToggle.on('click', '*', function(e) {
        e.stopPropagation();
    });
	
	
	var catnavContainer = $('.menu_left .nav-container'), 
		catnavToggle = $('.dmmenu_mb .nav-toggle'),
        catnavDropdownToggle = $('.dmmenu_mb .has-dropdown');
	var crClickedNav = -1;
	// Nav toggle
    catnavToggle.on('click', function(e) {
        var $this = $(this);
        e.preventDefault();

		
        $this.toggleClass('is-active');
        catnavContainer.toggleClass('is-visible');
		crClickedNav = e.pageY;
        html.toggleClass('nav-open');
		if($(".list_menu_left").hasClass("nav-dm")){
			$(".list_menu_left").removeClass("nav-dm");
			$(".list_menu_left").css("padding-right", "15px");
			$(".list_menu_left").css("padding-left", "15px");
		}else{
			$(".list_menu_left").addClass("nav-dm");
			$(".list_menu_left").css("padding-right", "0px");
			$(".list_menu_left").css("padding-left", "0px");
			window.scrollTo(0,255);
		}
		
    });

    // Nav dropdown toggle
    catnavDropdownToggle.on('click', function() {
        var $this = $(this);
        $this.toggleClass('is-active').children('ul').toggleClass('is-visible');
    });

    // Prevent click events from firing on children of navDropdownToggle
    catnavDropdownToggle.on('click', '*', function(e) {
        e.stopPropagation();
    });
	

	
});
