// © Copyright 2015 - Archi by Designesia 

jQuery(document).ready(function() {		
	'use strict';				// use strict mode

	var de_header_style 	= 1; // 1 - solid, 2 - transparent
	var de_menu_separator	= 1; // 1 - dotted, 2 - border, 3 - circle, 4 - square, 5 - plus, 6 - strip, 0 - none
	var de_color_style		= 2; // 1 - default, 2 - light style
	var de_font_style		= 2; // 1 - default, 2 - alternate font style

	var mobile_menu_show    = 0;
	
	if(de_color_style==2){$('body').addClass('de_light');}	
	if(de_font_style==2){$('head').append('<link rel="stylesheet" href="css/font-style-2.css" type="text/css" />');}	
	if(de_header_style==2){$('header').addClass('transparent')}	
	if(de_menu_separator==2){$('#mainmenu').addClass('line-separator');
	}else if(de_menu_separator==3){$('#mainmenu').addClass('circle-separator');
	}else if(de_menu_separator==4){$('#mainmenu').addClass('square-separator');
	}else if(de_menu_separator==5){$('#mainmenu').addClass('plus-separator');
	}else if(de_menu_separator==6){$('#mainmenu').addClass('strip-separator');
	}else if(de_menu_separator==0){$('#mainmenu').addClass('no-separator');}
// wow jquery
	
new WOW().init();	
// --------------------------------------------------
// sticky header
// --------------------------------------------------
	    
    jQuery(window).on("scroll", function() {
    	jQuery("header").addClass("clone", 1000, "easeOutBounce" );
    });
	
	
	
	window.onresize = function(event) {
		
		enquire.register("screen and (min-width: 993px)", {
		match : function() {
			jQuery('#mainmenu').show();
			mobile_menu_show = 1;
		},  
		unmatch : function() {
			jQuery('#mainmenu').hide();
			mobile_menu_show = 0;
			jQuery("#menu-btn").show();
		}
		});
		
		init_de();
		jQuery('#gallery').isotope('reLayout');

		$('header').removeClass('smaller');
		$('header').removeClass('logo-smaller');
		$('header').removeClass('clone');
		
		
	};	
	

	function init() {
        window.addEventListener('scroll', function(e){
			
			var mq = window.matchMedia( "(min-width: 993px)" );
			
			if (mq.matches) {
				var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 100,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
				jQuery('header').addClass("logo-smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
					jQuery('header').removeClass("logo-smaller");
                }

            }
			}

            
        });
    }
    window.onload = init();
	


	
// --------------------------------------------------
// custom positiion
// --------------------------------------------------
	var $doc_height = jQuery(window).innerHeight(); 
	jQuery('#homepage #content.content-overlay').css("margin-top", $doc_height);
	jQuery('.full-height').css("height", $doc_height);
	var picheight = jQuery('.center-y').css("height");
	picheight = parseInt(picheight, 10);
	jQuery('.center-y').css('margin-top', (($doc_height - picheight)/2)-90);
	jQuery('.full-height .de-video-container').css("height",$doc_height);
	


	
	jQuery(window).load(function() {
			
		
/*----------------------------------------------------------*/
/*              15 - FLEX SLIDERS                           */
/*----------------------------------------------------------*/
        if ($('.flexslider.team-member-slider').length && jQuery()) {
            var target_flexslider = $('.flexslider.team-member-slider');
            target_flexslider.flexslider({
                animation: "slide",
                controlNav: false,
                animationSpeed: 1500,
                pauseOnHover: true,
                slideshow: false,
                smoothHeight: false,
                pauseOnAction: true
            });
            $(".flexslider.team-member-slider").hover(function () {
                    $('.flexslider.team-member-slider .flex-direction-nav').fadeIn(200);
                },
                function () {
                    $('.flexslider.team-member-slider .flex-direction-nav').fadeOut(200);
             });
        }

        if ($('.flexslider.clients-slider').length && jQuery()) {
            var target_flexslider = $('.flexslider.clients-slider');
            target_flexslider.flexslider({
                animation: "slide",
                controlNav: false,
                animationSpeed: 1500,
                pauseOnHover: true,
                slideshow: true,
                smoothHeight: true,
                pauseOnAction: true
            });
            
        }

        if ($('.flexslider.single-portfolio-item-slider').length && jQuery()) {
            var target_flexslider = $('.flexslider.single-portfolio-item-slider');
            target_flexslider.flexslider({
                animation: "fade",
                controlNav: false
            });
            $(".flexslider.single-portfolio-item-slider").hover(function () {
                    $('.flexslider.single-portfolio-item-slider .flex-direction-nav').fadeIn(200);
                },
                function () {
                    $('.flexslider.single-portfolio-item-slider .flex-direction-nav').fadeOut(200);
             });
        }

        if ($('.flexslider.portfolio-items-slider.fade').length && jQuery()) {
            var target_flexslider = $('.flexslider.portfolio-items-slider.fade');
            target_flexslider.flexslider({
                animation: "fade",
                controlNav: false,
                smoothHeight: false,
                pauseOnHover: true,
                pauseOnAction: true,
                slideshow: false
            });
            $(".flexslider.portfolio-items-slider.fade").hover(function () {
                    $('.flexslider.portfolio-items-slider.fade .flex-direction-nav').fadeIn(200);
                },
                function () {
                    $('.flexslider.portfolio-items-slider.fade .flex-direction-nav').fadeOut(200);
            });    
        }

        if ($('.flexslider.portfolio-items-slider.slide').length && jQuery()) {
            var target_flexslider = $('.flexslider.portfolio-items-slider.slide');
            target_flexslider.flexslider({
                animation: "slide",
                slideshow: false,
                controlNav: true,
                smoothHeight: false,
                pauseOnHover: true,
                
            });
            $(".flexslider.portfolio-items-slider.slide").hover(function () {
                    $('.flexslider.portfolio-items-slider.slide .flex-direction-nav').fadeIn(200);
                },
                function () {
                    $('.flexslider.portfolio-items-slider.slide .flex-direction-nav').fadeOut(200);
            });  
        }
		
/*----------------------------------------------------------*/
/*              11 - LAYER SLIDER JS                         */
/*----------------------------------------------------------*/
        if ($('#layerslider').length && jQuery()) {
            $('#layerslider').layerSlider({
                width: '100%',
                height: '450px',
                responsive: true,
                responsiveUnder: 940,
                sublayerContainer: 940,
                autoStart: true,
                pauseOnHover: true,
                firstLayer: 1,
                animateFirstLayer: true,
                randomSlideshow: false,
                twoWaySlideshow: true,
                loops: 0,
                forceLoopNum: true,
                autoPlayVideos: false,
                autoPauseSlideshow: 'auto',
                keybNav: true,
                touchNav: true,
                navButtons: true,
                navStartStop: false,
                skin: 'fullwidth',
                skinsPath: 'images/layer-slider/skins/',
            });
        }
	// --------------------------------------------------
	// navigation for mobile
	// --------------------------------------------------
	
	
	
	jQuery('#menu-btn').on("click", function() {
		if(mobile_menu_show==0){
			jQuery('#mainmenu').slideDown();
			mobile_menu_show = 1;
		}else{
			jQuery('#mainmenu').slideUp();
			mobile_menu_show = 0;			
		}
	})
	
// one page navigation
	      /**
         * This part causes smooth scrolling using scrollto.js
         * We target all a tags inside the nav, and apply the scrollto.js to it.
         */
		 
        jQuery("#homepage nav a").click(function(evn){
			
			if (this.href.indexOf('#') != -1) {
            evn.preventDefault();
            jQuery('html,body').scrollTo(this.hash, this.hash); 
			}
        });
		
		jQuery("a.btn").click(function(evn){
			
			if (this.href.indexOf('#') != -1) {
            evn.preventDefault();
            jQuery('html,body').scrollTo(this.hash, this.hash); 
			}
        });

		

});


});

