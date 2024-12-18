"use strict";

function pieChart() {
	//circle progress bar
	if ((jQuery().easyPieChart) && (jQuery.support.leadingWhitespace)) {
		var count = 0 ;
		// var colors = ['#4D91BA', '#5FCCA3', '#FFBB19'];
		var colors = ['#d94362'];
		jQuery('.chart').each(function(){

			var imagePos = jQuery(this).offset().top;
			var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+900) {

				jQuery(this).easyPieChart({
			        barColor: colors[count],
					trackColor: 'rgba(255,255,255,0.2)',
					scaleColor: false,
					scaleLength: false,
					lineCap: 'butt',
					lineWidth: 10,
					size: 270,
					rotate: 0,
					animate: 3000,
					onStep: function(from, to, percent) {
							jQuery(this.el).find('.percent').text(Math.round(percent));
						}
			    });
			}
			count++;
			if (count >= colors.length) { count = 0};
		});
	}
}


jQuery(document).ready(function() {
	///////////
	//Plugins//
	///////////
    //contact form processing
    jQuery('form.contact-form').on('submit', function( e ){
        e.preventDefault();
        var $form = jQuery(this);
        jQuery($form).find('span.contact-form-respond').remove();
        //checking on empty values
        var formFields = $form.serializeArray();
        for (var i = formFields.length - 1; i >= 0; i--) {
        	if (!formFields[i].value.length) {
        		$form.find('[name="' + formFields[i].name + '"]').addClass('invalid').on('focus', function(){jQuery(this).removeClass('invalid')});
        	};
        };
        //if one of form fields is empty - exit
        if ($form.find('[name]').hasClass('invalid')) {
        	return;
        };
        //sending form data to PHP server if fields are not empty
        var request = $form.serialize();
        var ajax = jQuery.post( "contact-form.php", request )
            .done(function( data ) {
                jQuery($form).find('[type="submit"]').attr('disabled', false).parent().append('<span class="contact-form-respond highlight">'+data+'</span>');
        })
            .fail(function( data ) {
                jQuery($form).find('[type="submit"]').attr('disabled', false).parent().append('<span class="contact-form-respond highlight">Mail cannot be sent. You need PHP server to send mail.</span>');
        })
    });

    //mailchimp subscribe form processing
    jQuery('#signup').on('submit', function( e ) {
        e.preventDefault();
        // update user interface
        jQuery('#response').html('Adding email address...');
        // Prepare query string and send AJAX request
        jQuery.ajax({
            url: 'mailchimp/store-address.php',
            data: 'ajax=true&email=' + escape(jQuery('#mailchimp_email').val()),
            success: function(msg) {
                jQuery('#response').html(msg);
            }
        });
    });

	//twitter
	//slide tweets
	jQuery('#tweets .twitter').bind('loaded', function(){
		jQuery(this).addClass('flexslider').find('ul').addClass('slides');
	});
	if (jQuery().tweet) {
		jQuery('.twitter').tweet({
			modpath: "./twitter/",
		    count: 2,
		    avatar_size: 48,
		    loading_text: 'loading twitter feed...',
		    join_text: 'auto',
		    username: 'ThemeForest',
		    template: "{avatar}<div class=\"tweet_right\">{time}{join}<span class=\"tweet_text\">{tweet_text}</span></div>"
		});
	}


	//mainmenu
	if (jQuery().superfish) {
		jQuery('ul.sf-menu').superfish({
			delay:       300,
			animation:   {opacity:'show'},
			animationOut: {opacity: 'hide'},
			speed:       'fast',
			disableHI:   false,
			cssArrows:   true,
			autoArrows:  true
		});
	}
		//toggle mobile menu
	jQuery('#toggle_menu').on('click', function(){
		jQuery('#toggle_menu').toggleClass('mobile-active');
		jQuery('#header').toggleClass('mobile-active');
	});

	jQuery('#mainmenu a').on('click', function(){
		if (!jQuery(this).hasClass('sf-with-ul')) {
			jQuery('#toggle_menu').toggleClass('mobile-active');
			jQuery('#header').toggleClass('mobile-active');
		}
	});
		//toggle desktop menu
	jQuery('#toggle_menu').on('click', function(){
		jQuery(this).toggleClass('header-hidden');
		jQuery('#header, #header_wrapper').toggleClass('desktop-hide');
	});

	//single page localscroll and scrollspy
	var navHeight = jQuery('#header').outerHeight(true);
	jQuery('body').scrollspy({
		target: '#mainmenu_wrapper',
		offset: navHeight
	});
	if (jQuery().localScroll) {
		jQuery('#mainmenu, #land').localScroll({
			duration:900,
			easing:'easeInOutQuart',
			offset: -navHeight+10
		});

	}

	//stick header to top
	var $affixHeader = jQuery('#header');
	var headerOffset = 0;
	jQuery($affixHeader).affix({
		offset: {
			top: headerOffset,
			bottom: 0
		}
	});
    // Changing header toggler on affix events
    if ($affixHeader.hasClass('affix')) {
        jQuery('#toggle_menu').removeClass().addClass('sticked');
    }

    jQuery($affixHeader).on('affix.bs.affix', function () {
        jQuery('#toggle_menu').removeClass().addClass('sticked');
    });

    jQuery($affixHeader).on('affix-top.bs.affix', function () {
        jQuery('#toggle_menu').removeClass().addClass('tgl-hide-defult');
    });



	//wrap header with div for smooth sticking
	var headerHeight = $affixHeader.outerHeight(true);
	$affixHeader.wrap('<div id="header_wrapper"></div>').parent().css({height: headerHeight}); //wrap header for smooth stick and unstick

	//if header has different height on afixed and affixed-top positions - correcting wrapper height
	jQuery($affixHeader).on('affixed-top.bs.affix', function () {
		$affixHeader.parent().css({height: $affixHeader.outerHeight(true)});
	});


	//toTop
	if (jQuery().UItoTop) {
        jQuery().UItoTop({ easingType: 'easeOutQuart' });
    }

	//parallax
	if (jQuery().parallax) {
		jQuery('#progress').parallax("50%", -0.01);
		jQuery('#services').parallax("50%", -0.01);
		// jQuery('#team').parallax("50%", 0.08);
		jQuery('#action').parallax("50%", 0.2);
		jQuery('#contact').parallax("50%", -0.01);
		jQuery('#skills').parallax("50%", 0.01);
	}



    //prettyPhoto
    if (jQuery().prettyPhoto) {
	   	jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({
	   		hook: 'data-gal',
			theme: 'facebook' /* light_rounded / dark_rounded / light_square / dark_square / facebook / pp_default*/
	  	});
	}

   	//tooltip
   	if (jQuery().tooltip) {
		jQuery('[data-toggle="tooltip"]').tooltip();
	}

   	//carousel
   	if (jQuery().carousel) {
		jQuery('.carousel').carousel();
	}

	//owl carousel
	if (jQuery().owlCarousel) {
		jQuery("#gallery-small-carousel").owlCarousel({
	    	navigation : true,
	    	theme: 'gallery-small-carousel',
	    	pagination : false,
	    	items: 3,
	    	itemsDesktop: [1199,3],
	    	itemsDesktopSmall: [979,3],
	    	itemsTablet: [768,3],
	    	itemsMobile: [479,3]

	    });
	    var $fromBlogWidget = jQuery("#from-blog-widget");
	    var shownBlogItems = ($fromBlogWidget.hasClass('classic-blog-items')) ? 3 : 2;
	    $fromBlogWidget.owlCarousel({
	    	navigation : true,
	    	// navigationText : true,
	    	pagination : false,
	    	items: shownBlogItems,
	    	itemsDesktop: [1199,shownBlogItems],
	    	itemsDesktopSmall: [979,2],
	    	itemsTablet: [768,1],
	    	itemsMobile: [479,1],
	    	theme: 'from-blog-widget',
	    	navigationText: ['<a href="#">'
	    		+ $fromBlogWidget.data('prev-text')
	    		+ '</a>',
	    		'<a href="#">'
	    		+ $fromBlogWidget.data('next-text')
	    		+ '</a>']

	    }).find('.owl-buttons a').on('click', function( e ){ e.preventDefault(); });

		jQuery("#partners-carousel").owlCarousel({
	    	navigation : false,
	    	// navigationText : true,
	    	autoPlay : true,
	    	pagination : false,
	    	// items: 4,

	    });

	    jQuery("#team_carousel").owlCarousel({
	    	navigation : false,
	    	// navigationText : true,
	    	autoPlay : false,
	    	pagination : true,
	    	items: 1,
	    	itemsDesktop: [1199,1],
	    	itemsDesktopSmall: [979,1],
	    	itemsTablet: [768,1],
	    	itemsMobile: [479,1],
	    	autoHeight: true

	    });
	    jQuery(".owl-carousel").owlCarousel({
	    	navigation : true,
	    	pagination : false
	    });

	}

});


jQuery(window).load(function(){

	//chart
	pieChart();


	//flexslider
	if (jQuery().flexslider) {
		//var $mainSlider = jQuery('#mainslider');
		jQuery("#mainslider .flexslider").flexslider({
			animation: "fade",
			useCSS: true,
			controlNav: true,
			directionNav: false,
		    prevText: "",
		    nextText: "",
			smoothHeight: false,
			slideshowSpeed:8000,
			animationSpeed:300,
			start: function( slider ) {
				slider.find('.slide_description').children().css({'visibility': 'hidden'});
				slider.find('.flex-active-slide .slide_description').children().each(function(index){
				var self = jQuery(this);
				var animationClass = !self.data('animation') ? 'fadeInRight' : self.data('animation');
				setTimeout(function(){
						self.addClass("animated "+animationClass);
					}, index*200);
				});
			},
			after :function( slider ){
				slider.find('.flex-active-slide .slide_description').children().each(function(index){
				var self = jQuery(this);
				var animationClass = !self.data('animation') ? 'fadeInRight' : self.data('animation');
				setTimeout(function(){
						self.addClass("animated "+animationClass);
					}, index*200);
				});
			},
			end :function( slider ){
				slider.find('.slide_description').children().each(function() {
					jQuery(this).attr('class', '');
				});
			}
		});

		jQuery(".flexslider").flexslider({
			animation: "fade",
			useCSS: true,
			controlNav: true,
			directionNav: false,
		    prevText: "",
		    nextText: "",
			//animationLoop: false,
			smoothHeight: true,
			slideshowSpeed:5000,
			animationSpeed:800,
			after :function( slider ){

			}
		});
	}



	//preloader
	jQuery(".preloaderimg").fadeOut();
	jQuery(".preloader").delay(200).fadeOut("slow").delay(200, function(){
		jQuery(this).remove();
	});

	jQuery('body').scrollspy('refresh');



	//animation to elements on scroll
	if (jQuery().appear) {

		jQuery('.to_animate').appear();
		jQuery('.to_animate').filter(':appeared').each(function(index){
			var self = jQuery(this);
			var animationClass = !self.data('animation') ? 'fadeInUp' : self.data('animation');
			var animationDelay = !self.data('delay') ? 210 : self.data('delay');
			setTimeout(function(){
				self.addClass("animated " + animationClass);
			}, index * animationDelay);
		});

		jQuery('body').on('appear', '.to_animate', function(e, $affected ) {
			jQuery($affected).each(function(index){
				var self = jQuery(this);
				var animationClass = !self.data('animation') ? 'fadeInUp' : self.data('animation');
				var animationDelay = !self.data('delay') ? 210 : self.data('delay');
				setTimeout(function(){
					self.addClass("animated " + animationClass);
				}, index * animationDelay);
			});
		});
	}

	//counters init on scroll
	if (jQuery().appear) {
		jQuery('.counter').appear();
		jQuery('.counter').filter(':appeared').each(function(index){
			if (jQuery(this).hasClass('counted')) {
				return;
			} else {
				jQuery(this).countTo().addClass('counted');
			}
		});
		jQuery('body').on('appear', '.counter', function(e, $affected ) {
			jQuery($affected).each(function(index){
				if (jQuery(this).hasClass('counted')) {
					return;
				} else {
					jQuery(this).countTo().addClass('counted');
				}

			});
		});
	}


	//flickr
	// use http://idgettr.com/ to find your ID
	if (jQuery().jflickrfeed) {
		jQuery("#flickr").jflickrfeed({
			flickrbase: "http://api.flickr.com/services/feeds/",
			limit: 6,
			qstrings: {
				id: "63512867@N07"
			},
			itemTemplate: '<a href="{{image_b}}" data-gal="prettyPhoto[pp_gal]"><li><img alt="{{title}}" src="{{image_s}}" /></li></a>'
		}, function(data) {
			jQuery("#flickr a").prettyPhoto({
				hook: 'data-gal',
				theme: 'facebook'
	   		});
	   		jQuery("#flickr li").hover(function () {
			   jQuery(this).find("img").stop().animate({ opacity: 0.5 }, 200);
		    }, function() {
			   jQuery(this).find("img").stop().animate({ opacity: 1.0 }, 400);
		    });
		});
	}

});

jQuery(window).resize(function(){

	jQuery('body').scrollspy('refresh');
	jQuery("#header_wrapper").css({height: jQuery('#header').outerHeight(true)}); //editing header wrapper height for smooth stick and unstick

});

jQuery(window).scroll(function() {

	//circle progress bar
	pieChart();


});




