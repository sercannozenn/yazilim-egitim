(function ($) {
    "use strict";

    var windows = $(window);
	var screenSize = windows.width();
	var sticky = $('.header-sticky');
	var $html = $('html');
	var $body = $('body');

      /*=============================================
    =       Menu sticky & Scroll to top          =
    =============================================*/
	var windows = $(window);
	var screenSize = windows.width();
	var sticky = $('.header-sticky');
	var $html = $('html');
	var $body = $('body');

	windows.on('scroll', function () {
		var scroll = windows.scrollTop();
		var headerHeight = sticky.height();

		if (screenSize >= 320) {
			if (scroll < headerHeight) {
				sticky.removeClass('is-sticky');
			} else {
				sticky.addClass('is-sticky');
            }
		}

    });
    /*----------  Scroll to top  ----------*/
    function scrollToTop() {
        var $scrollUp = $('#scroll-top'),
            $lastScrollTop = 0,
            $window = $(window);

        $window.on('scroll', function () {
            var st = $(this).scrollTop();
            if (st > $lastScrollTop) {
                $scrollUp.removeClass('show');
            } else {
                if ($window.scrollTop() > 200) {
                    $scrollUp.addClass('show');
                } else {
                    $scrollUp.removeClass('show');
                }
            }
            $lastScrollTop = st;
        });

        $scrollUp.on('click', function (evt) {
            $('html, body').animate({scrollTop: 0}, 600);
            evt.preventDefault();
        });
    }
    scrollToTop();
    
    /*===========================================
    =            Submenu viewport position      =
    =============================================*/
    
    if ($(".has-children--multilevel-submenu").find('.submenu').length) {
        var elm = $(".has-children--multilevel-submenu").find('.submenu');
        
        elm.each(function(){
            var off = $(this).offset();
            var l = off.left;
            var w = $(this).width();
            var docH = windows.height();
            var docW = windows.width() - 10;
            var isEntirelyVisible = (l + w <= docW);

            if (!isEntirelyVisible) {
                $(this).addClass('left');
            }
        });
    }
    /*==========================================
    =            mobile menu active            =
    ============================================*/
    
    $("#mobile-menu-trigger").on('click', function(){
        $("#mobile-menu-overlay").addClass("active");
        $body.addClass('no-overflow');
    });
    
    $("#mobile-menu-close-trigger").on('click', function(){
        $("#mobile-menu-overlay").removeClass("active");
        $body.removeClass('no-overflow');
    });
    
    $(".offcanvas-navigation--onepage ul li a").on('click', function(){
        $("#mobile-menu-overlay").removeClass("active");
        $body.removeClass('no-overflow');
    });
    
    /*Close When Click Outside*/
    $body.on('click', function(e){
        var $target = e.target;
        if (!$($target).is('.mobile-menu-overlay__inner') && !$($target).parents().is('.mobile-menu-overlay__inner') && !$($target).is('#mobile-menu-trigger') && !$($target).is('#mobile-menu-trigger i')){
            $("#mobile-menu-overlay").removeClass("active");
            $body.removeClass('no-overflow');
        }
    });
    
    
    /*===================================
    =           Menu Activeion          =
    ===================================*/
    var cururl = window.location.pathname;
    var curpage = cururl.substr(cururl.lastIndexOf('/') + 1);
    var hash = window.location.hash.substr(1);
    if((curpage == "" || curpage == "/" || curpage == "admin") && hash=="")
        {
        //$("nav .navbar-nav > li:first-child").addClass("active");
        } else {
            $(".navigation-menu li").each(function()
        {
            $(this).removeClass("active");
        });
        if(hash != "")
            $(".navigation-menu li a[href*='"+hash+"']").parents("li").addClass("active");
        else
        $(".navigation-menu li a[href*='"+curpage+"']").parents("li").addClass("active");
    }
    
    
    /*=========================================
    =             open menu Active            =
    ===========================================*/
     $('.openmenu-trigger').on('click', function (e) {
        e.preventDefault();
        $('.open-menuberger-wrapper').addClass('is-visiable');
    });

    $('.page-close').on('click', function (e) {
        e.preventDefault();
        $('.open-menuberger-wrapper').removeClass('is-visiable');
    });
    
      
    /*=========================================
    =             open menu Active            =
    ===========================================*/
    $("#open-off-sidebar-trigger").on('click', function(){
        $("#page-oppen-off-sidebar-overlay").addClass("active");
        $body.addClass('no-overflow');
    });
    
    $("#menu-close-trigger").on('click', function(){
        $("#page-oppen-off-sidebar-overlay").removeClass("active");
        $body.removeClass('no-overflow');
    });
    
    /*=============================================
    =            search overlay active            =
    =============================================*/
    
    $("#search-overlay-trigger").on('click', function(){
        $("#search-overlay").addClass("active");
        $body.addClass('no-overflow');
    });
    
    $("#search-close-trigger").on('click', function(){
        $("#search-overlay").removeClass("active");
        $body.removeClass('no-overflow');
    });
    
    /*=============================================
    =            hidden icon active            =
    =============================================*/
    
    $("#hidden-icon-trigger").on('click', function(){
        $("#hidden-icon-wrapper").toggleClass("active");
    });
     
    /*=========================================
    =             open menu Active            =
    ===========================================*/
    $('.share-icon').on('click', function (e) {
        e.preventDefault();
        $('.entry-post-share').toggleClass('opened');
    });

    $body.on("click", function () {
        $(".entry-post-share").removeClass('opened');
    });
    // Prevent closing dropdown upon clicking inside the dropdown
    $(".entry-post-share").on("click", function(e) {
        e.stopPropagation();
    });
    
    /*=============================================
    =            offcanvas mobile menu            =
    =============================================*/
    var $offCanvasNav = $('.offcanvas-navigation'),
        $offCanvasNavSubMenu = $offCanvasNav.find('.sub-menu');
    
    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i></i></span>');
    
    /*Close Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.slideUp();
    
    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if ( ($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length){
                $this.parent('li').removeClass('active');
                $this.siblings('ul').slideUp();
            } else {
                $this.parent('li').addClass('active');
                $this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');
                $this.closest('li').siblings('li').find('ul:visible').slideUp();
                $this.siblings('ul').slideDown();
            }
        }
    });


    $(document).ready(function(){
        
        /*=============================================
        =            swiper slider activation            =
        =============================================*/
                
        var carouselSlider = new Swiper('.most-popular-slider-active', {
            slidesPerView : 3,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            speed: 1000,
            spaceBetween : 30,
            navigation: {
                nextEl: '.popular-swiper-button-next',
                prevEl: '.popular-swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination-t0',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                1499: {
                    slidesPerView : 3
                },
    
                991: {
                    slidesPerView : 3
                },
    
                767: {
                    slidesPerView : 2
    
                },
    
                575: {
                    slidesPerView : 2
                },
                0 : {
                    slidesPerView : 1
                }
            }
        });
        
        var carouselSlider = new Swiper('.hero-slider-three-active', {
            slidesPerView : 1,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            speed: 1000,
            spaceBetween : 0,
            navigation: {
                nextEl: '.slider-three-swiper-button-next',
                prevEl: '.slider-three-swiper-button-prev',
            },
            pagination: {
                el: '.hero-swiper-pagination',
                type: 'bullets',
                clickable: true
            }
        });


        var carouselSlider = new Swiper('.hero-slider-four-active', {
            slidesPerView : 1,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            speed: 1000,
            spaceBetween : 0,
            navigation: {
                nextEl: '.slider-four-button-next',
                prevEl: '.slider-four-button-prev',
            },
            pagination: {
                el: '.hero-swiper-pagination',
                type: 'bullets',
                clickable: true
            }
        });
        

        var carouselSlider = new Swiper('.trending-slider-active', {
            slidesPerView : 1,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            speed: 1000,
            spaceBetween : 0,
            navigation: {
                nextEl: '.trending-button-next',
                prevEl: '.trending-button-prev',
            },
            pagination: {
                el: '.trending-swiper-pagination',
                type: 'bullets',
                clickable: true
            }
        });

        var carouselSlider = new Swiper('.following-slider-active', {
            slidesPerView : 1,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            speed: 1000,
            spaceBetween : 0,
            navigation: {
                nextEl: '.following-button-next',
                prevEl: '.following-button-prev',
            },
            pagination: {
                el: '.following-swiper-pagination',
                type: 'bullets',
                clickable: true
            }
        });
        

        var carouselSlider = new Swiper('.trending-topic-slider-active', {
            slidesPerView : 5,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            speed: 1000,
            spaceBetween : 25,
            navigation: {
                nextEl: '.trending-topic-button-next',
                prevEl: '.trending-topic-button-prev',
            },
            pagination: {
                el: '.hero-swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                1499: {
                    slidesPerView : 5
                },
    
                991: {
                    slidesPerView : 4
                },
    
                767: {
                    slidesPerView : 4
    
                },
    
                575: {
                    slidesPerView : 3,
                    spaceBetween : 10
                },
                0 : {
                    slidesPerView : 2,
                    spaceBetween : 10,
                }
            }
        });
        var carouselSlider = new Swiper('.latest-post-slider-active', {
            slidesPerView : 1,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            speed: 1000,
            spaceBetween : 0,
            navigation: {
                nextEl: '.latest-post-button-next',
                prevEl: '.latest-post-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            }
        });
        
        var carouselSlider = new Swiper('.recent-reading-slider-active', {
            slidesPerView : 3,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            speed: 1000,
            spaceBetween : 30,
            navigation: {
                nextEl: '.recent-reading-button-next',
                prevEl: '.recent-reading-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                1499: {
                    slidesPerView : 3
                },
    
                991: {
                    slidesPerView : 2
                },
    
                767: {
                    slidesPerView : 1
    
                },
    
                575: {
                    slidesPerView : 1
                },
                0 : {
                    slidesPerView : 1
                }
            }
        });
        
        
        var carouselSlider = new Swiper('.trusted-partners-slider-active', {
            slidesPerView : 4,
            slidesPerGroup: 2,
            centeredSlides: false,
            loop: true,
            speed: 1000,
            spaceBetween : 30,
            navigation: {
                nextEl: '.partners-swiper-button-next',
                prevEl: '.partners-swiper-button-prev',
            },
            pagination: {
                el: '.partners-swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                1499: {
                    slidesPerView : 4
                },
    
                991: {
                    slidesPerView : 4
                },
    
                767: {
                    slidesPerView : 2
    
                },
    
                575: {
                    slidesPerView : 2
                },
                0 : {
                    slidesPerView : 2
                }
            }
        });
        
        var carouselSlider = new Swiper('.testimonial-slider-active', {
            slidesPerView : 3,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            speed: 1000,
            spaceBetween : 30,
            navigation: {
                nextEl: '.testimonial-button-next',
                prevEl: '.testimonial-button-prev',
            },
            pagination: {
                el: '.partners-swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                1499: {
                    slidesPerView : 3
                },
    
                991: {
                    slidesPerView : 3
                },
    
                767: {
                    slidesPerView : 2
    
                },
    
                575: {
                    slidesPerView : 1
                },
                0 : {
                    slidesPerView : 1
                }
            }
        });
        
        var carouselSlider = new Swiper('.trending-tody-slider-active', {
            slidesPerView : 1,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            speed: 1000,
            spaceBetween : 30,
            navigation: {
                nextEl: '.testimonial-button-next',
                prevEl: '.testimonial-button-prev',
            },
            pagination: {
                el: '.trending-tody-swiper-pagination',
                type: 'bullets',
                clickable: true
            }
        });
        


        var carouselSlider = new Swiper('.hero-six-slider-active', {
            slidesPerView : 1,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            speed: 1000,
            spaceBetween : 30,
            navigation: {
                nextEl: '.slider-six-button-next',
                prevEl: '.slider-six-button-prev',
            },
            pagination: {
                el: '.hero-six-swiper-pagination',
                type: 'bullets',
                clickable: true
            }
        });

        
        var carouselSlider = new Swiper('.trending-tody-slider-two-active', {
            slidesPerView : 3,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            speed: 1000,
            spaceBetween : 30,
            navigation: {
                nextEl: '.trending-tody-button-next',
                prevEl: '.trending-tody-button-prev',
            },
            pagination: {
                el: '.trending-tody-swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                1499: {
                    slidesPerView : 3
                },
    
                991: {
                    slidesPerView : 3
                },
    
                767: {
                    slidesPerView : 2
    
                },
    
                575: {
                    slidesPerView : 1
                },
                0 : {
                    slidesPerView : 1
                }
            }
        });
        
        var carouselSlider = new Swiper('.related-post-slider-active', {
            slidesPerView : 2,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            speed: 1000,
            spaceBetween : 30,
            navigation: {
                nextEl: '.related-post-button-next',
                prevEl: '.related-post-button-prev',
            },
            pagination: {
                el: '.related-post-swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                1499: {
                    slidesPerView : 2
                },
    
                991: {
                    slidesPerView : 2
                },
    
                767: {
                    slidesPerView : 2
    
                },
    
                575: {
                    slidesPerView : 1
                },
                0 : {
                    slidesPerView : 1
                }
            }
        });
        var carouselSlider = new Swiper('.related-post-two-slider-active', {
            slidesPerView : 3,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            speed: 1000,
            spaceBetween : 30,
            navigation: {
                nextEl: '.related-post-button-next',
                prevEl: '.related-post-button-prev',
            },
            pagination: {
                el: '.related-post-swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                1499: {
                    slidesPerView : 3
                },
    
                991: {
                    slidesPerView : 3
                },
    
                767: {
                    slidesPerView : 2
    
                },
    
                575: {
                    slidesPerView : 1
                },
                0 : {
                    slidesPerView : 1
                }
            }
        });

    /*=====  End of swiper slider activation  ======*/
    });

    /*=============================================
    =            light gallery active            =
    =============================================*/
    
    $('.popup-images').lightGallery(); 

    $('.video-popup').lightGallery(); 


    
    /*===================================
        AOS Scroll Animation 
    ===================================*/
    AOS.init({
        offset: 80,
        duration: 1000,
        once: true,
        easing: 'ease',
    });


    /*==================================
    =	      Mesonry Activation       =
    ===================================*/
    $('.projects-masonary-wrapper,.masonry-activation').imagesLoaded(function () {

        // filter items on button click
        $('.messonry-button').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $(this).siblings('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
            $grid.isotope({
                filter: filterValue
            });
        });

        // Masonry
        var $grid = $('.masonry-wrap').masonry({
            itemSelector: '.masonary-item',
            percentPosition: true,
            transitionDuration: '0.7s',
            //itemSelector: '.grid-item',
            columnWidth: '.masonary-sizer'
        });

        // init Isotope
        var $grid = $('.mesonry-list').isotope({
            percentPosition: true,
            transitionDuration: '0.7s',
            layoutMode: 'masonry',/*
            masonry: {
                columnWidth: '.resizer',
            }*/
        });

    });

    
    
})(jQuery);
