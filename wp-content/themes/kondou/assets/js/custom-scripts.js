/*-------------------------------------------------------------------*/
/* Project: Petmate - Animal Care Center HTML5 Template */
/* Ver: 1.0.1*/
/* Date: 24-11-2018*/
/* Author: xenioushk*/
/*-------------------------------------------------------------------*/

jQuery(function ($) {

    "use strict";
    
    // 00. RTL status check.
    var rtl_status = false;
    if ($('html').is('[dir]')) {
        rtl_status = true;
    }

    (navigator.userAgent||navigator.vendor||window.opera);

    // DETECT TOUCH DEVICE
    
    function is_touch_device() {
        return !!('ontouchstart' in window) || (!!('onmsgesturechange' in window) && !!window.navigator.maxTouchPoints);
    }

    // ANIMATIONS //
     function animations() {

        animations = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 30,
            mobile: false,
            live: true
        });

        animations.init();

    }
    
    // New JS code
    
    $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
        //checking sp or pc
        let check = false;
        (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})
        if( !check ) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');

            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
                $('.dropdown-submenu .show').removeClass("show");
            });
        }
        return false;
    });
//steps anime
// 動きのきっかけの起点となるアニメーションの名前を定義
    function stepsAnime(){

        $('.stepsTrigger').each(function(){ //stepsTriggerというクラス名が
            var elemPos = $(this).offset().top-50;//要素より、50px上の
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight){
            $(this).addClass('steps');// 画面内に入ったらstepsというクラス名を追記
            }else{
            $(this).removeClass('steps');// 画面外に出たらstepsというクラス名を外す
            }
            });

    }

// 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function (){
        stepsAnime();/* アニメーション用の関数を呼ぶ*/
    });// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
    $(window).on('load', function(){
        stepsAnime();/* アニメーション用の関数を呼ぶ*/
    });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述

//sp nav-menu bar
    $(window).scroll(function () {
        let check = false;
        (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
        if(check){
            if ($(this).scrollTop() > 300) {
                $(".sticky-wrapper").css({'position': 'fixed'});
            } else {
                $(".sticky-wrapper").css({'position': 'relative'});
            }
            // if( !$(".navbar-toggler").hasClass('collapsed') ) {
            //     $(".navbar-toggler").addClass('collapsed');
            //     $(".navbar-toggler").attr('aria-expanded', 'false');
            // }
            // if( $(".navbar-collapse").hasClass('show') ) {
            //     $(".navbar-collapse").removeClass('show');
            // }
        }
    });

    $(window).click(function () {
        let check = false;
        (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
        if(check){
            if( !$(".navbar-toggler").hasClass('collapsed') ) {
                $(".navbar-toggler").addClass('collapsed');
                $(".navbar-toggler").attr('aria-expanded', 'false');
            }
            if( $(".navbar-collapse").hasClass('show') ) {
                $(".navbar-collapse").removeClass('show');
            }
        }
    });
    
    // BANNER.
    
    if ($(".section-banner").length) {
    
     $(".section-banner").each(function () {

            var $this = $(this);

            var bg_img = "images/home_1_slider_1.jpg",
                    bg_color = "#000000",
                    bg_opacity = "0.5",
                    bg_color_2 = "#000000",
                    bg_opacity_2 = "0.8";

            if ($this.is('[data-bg_img]')) {
                bg_img = ', url("' + $this.data('bg_img') + '")';
            } else {
                bg_img = ', url("' + bg_img + '")';
            }

            if ($this.is('[data-bg_color]')) {
                bg_color = $this.data('bg_color');
            }

            if ($this.is('[data-bg_opacity]')) {
                bg_opacity = $this.data('bg_opacity');
            }

            var $color_overlay = hexToRgbA(bg_color, bg_opacity);
            
            $color_overlay_2 = $color_overlay;
            
            if ($this.is('[data-gardient]') && $this.data('gardient') ===  true) {


                if ($this.is('[data-bg_color_2]')) {
                    bg_color_2 = $this.data('bg_color_2');
                }

                if ($this.is('[data-bg_opacity_2]')) {
                    bg_opacity_2 = $this.data('bg_opacity_2');
                }

                var $color_overlay_2 = hexToRgbA(bg_color_2, bg_opacity_2);

            }
            

            $this.attr("style", "background:linear-gradient( " + $color_overlay + ",  " + $color_overlay_2 + " )" + bg_img + "; background-position: center center; background-repeat: repeat; background-attachment: inherit; background-size: cover; overflow:hidden;");

        });
        
    }
    
    // SLIDER 1

    function slider_resize() {

        if ($(window).width() > 991) {
            
             $(".slider-content").first().attr("style", "margin-top: 0px;");
             
        } else {

            $(".slider-content").first().attr("style", "margin-top: 0px;");

        }


    }

    // SLIDER 1
    
    function slider_resize() {
        if ($(window).width() > 991) {
             $(".slider-content").first().attr("style", "margin-top: 0px;");
        } else {
            $(".slider-content").first().attr("style", "margin-top: 0px;");
        }
    }
    
    function hexToRgbA(hex, opacity) {
        var c;
        if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
            c = hex.substring(1).split('');
            if (c.length === 3) {
                c = [c[0], c[0], c[1], c[1], c[2], c[2]];
            }
            c = '0x' + c.join('');
            return 'rgba(' + [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(',') + ',' + opacity + ')';
        } else {
            return 'rgba("0,0,0,' + opacity + '")';
        }
    }
    
    // add animate.css class(es) to the elements to be animated
    function setAnimation(_elem, _InOut) {
        // Store all animationend event name in a string.
        // cf animate.css documentation
        var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        _elem.each(function () {
            var $elem = $(this);
            var $animationType = 'animated ' + $elem.data('animation-' + _InOut);
            $elem.addClass($animationType).one(animationEndEvent, function () {
                $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
            });
        });
    }

    
    if($('.slider-wrap')) {
        
        var $this = $('.slider-wrap');
        
        if ($this.is('[data-bg_img]')) {
            
            var bg_img = 'url("' + $this.data('bg_img') + '")';
            $this.css({
                'background-image': bg_img,
                'background-repeat': 'repeat',
                'background-position': 'center center',
                'background-size': 'cover'
            });
            
        }
        
    }
    
    if ($("#slider_1").length) {
        
        // BG & Color Settings.
        $("#slider_1").find('.slider_item_container').each(function () {
            var $this = $(this);
            var bg_img = "",
                    bg_color = "#000000",
                    bg_opacity = "0.1";
            if ($this.is('[data-bg_img]')) {
                bg_img = ', url("' + $this.data('bg_img') + '")';
            }
            if ($this.is('[data-bg_color]')) {
                bg_color = $this.data('bg_color');
            }
            if ($this.is('[data-bg_opacity]')) {
                bg_opacity = $this.data('bg_opacity');
            }
            var $color_overlay = hexToRgbA(bg_color, bg_opacity);
            
            $this.find('.item').before('<div class="slide-bg"></div>');
            
            $this.find('.slide-bg').attr("style", "background:linear-gradient( " + $color_overlay + ",  " + $color_overlay + " )" + bg_img + "; background-position: center center; background-repeat: no-repeat; background-attachment: inherit; background-size: cover; overflow:hidden;");
            
        });
        
        slider_resize();
        
        $(window).on("resize", function () {
            if ($(window).width() > 767) {
                slider_resize();
            } else {
                $(".slider-content").removeAttr("style");
            }
        });
        
        // Carousel.
        
        var $slider_1 = $("#slider_1");
        
        var $this = $slider_1;
        
        var items_val = 1,
                bg_effect_val = true,
                nav_val = false,
                dots_val = true,
                autoplay_val = true,
                autoplaytimeout_val = 10000;
        // Status.
        if ($this.attr('data-carousel') && $this.data('carousel') !== 1) {
            $this.removeClass('owl-carousel');
            return '';
        }
        
        // Status.
        if ($this.attr('data-bg_effect') && !isNaN($this.data('bg_effect'))) {
            bg_effect_val = $this.data('bg_effect');
        }
        // navigation status.
        if ($this.attr('data-nav') && !isNaN($this.data('nav'))) {
            nav_val = $this.data('nav');
        }

        // navigation status.
        if ($this.attr('data-dots') && !isNaN($this.data('dots'))) {
            dots_val = $this.data('dots');
        }
        // Autoplay status.
        if ($this.attr('data-autoplay') && !isNaN($this.data('autoplay'))) {
            autoplay_val = $this.data('autoplay');
        }
        // Autoplay status.
        if ($this.attr('data-autoplaytimeout') && !isNaN($this.data('autoplaytimeout'))) {
            autoplaytimeout_val = $this.data('autoplaytimeout');
        }
        
        $slider_1.owlCarousel({
            rtl: rtl_status,
            callbacks: true,
            margin:0,
            items: items_val,
            loop: true,
            autoplay: autoplay_val,
            autoplayTimeout: autoplaytimeout_val,
            autoplayHoverPause: false,
            dots: dots_val,
            nav: nav_val,
            responsive: {
                0: {
                    items: items_val,
                    nav: false,
                    loop: true,
                    dots: false
                },
                600: {
                    items: items_val,
                    nav: false,
                    loop: true,
                    dots: false
                },
                1000: {
                    items: items_val
                }
            },
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        });
        
        
        var $slider_animation = $slider_1;      
        
        // Fired before current slide change
        $slider_animation.on('change.owl.carousel', function (event) {
            var $currentItem = $('.owl-item', $slider_animation).eq(event.item.index);
            var $elemsToanim = $currentItem.find("[data-animation-out]");
            setAnimation($elemsToanim, 'out');
        });
        
     
        // Fired after current slide has been changed

        $slider_animation.on('changed.owl.carousel', function (event) {
            var $currentItem = $('.owl-item', $slider_animation).eq(event.item.index);
            var $elemsToanim = $currentItem.find("[data-animation-in]");
            setAnimation($elemsToanim, 'in');
      
        });
        
        
        
        if( bg_effect_val === true ) {
           
            $slider_animation.on('translated.owl.carousel',function(e){
               $(".active .slide-bg").addClass("slidezoom");
           }); 

           $slider_animation.on('translate.owl.carousel',function(e){
               $(".active .slide-bg").removeClass("slidezoom");
           });
        
        }
        
        
    }
    
    // STICKY HEADER & MENU

   if ( $(".main-header").attr('data-sticky_header')) {
    
        $('.main-header .menu-area').waypoint('sticky', {
            wrapper: '<div class="sticky-wrapper" />',
            stuckClass: 'stuck'
        });
    
    }
    
    if ($(".main-header-2").length) {

        if ($(".main-header-2").attr('data-sticky_header')) {
   
            $('.main-header-2 .menu-area').waypoint('sticky', {
                wrapper: '<div class="sticky-wrapper" />',
                stuckClass: 'stuck'
            });

        }
    }
    
    
        // HIGHLIGHT CAROUSEL
    
    if ($(".highlight-carousel").length) {
        var $highlight_carousel = $('.highlight-carousel');
        $highlight_carousel.each(function () {
            var $this = $(this);

            var items_val = 3,
                    nav_val = true,
                    dots_val = true,
                    autoplay_val = true,
                    autoplaytimeout_val = 5000;
            // Status.
            if ($this.attr('data-carousel') && $this.data('carousel') !== 1) {

                $this.removeClass('owl-carousel');
                return '';
            }
            // no of items
            if ($this.attr('data-items') && !isNaN($this.data('items'))) {
                items_val = $this.data('items');
            }
            // navigation status.
            if ($this.attr('data-nav') && !isNaN($this.data('nav'))) {
                nav_val = $this.data('nav');
            }

            // navigation status.
            if ($this.attr('data-dots') && !isNaN($this.data('dots'))) {
                dots_val = $this.data('dots');
            }
            // Autoplay status.
            if ($this.attr('data-autoplay') && !isNaN($this.data('autoplay'))) {
                autoplay_val = $this.data('autoplay');
            }
            // Autoplay status.
            if ($this.attr('data-autoplaytimeout') && !isNaN($this.data('autoplaytimeout'))) {
                autoplaytimeout_val = $this.data('autoplaytimeout');
            }

            $this.owlCarousel({
                rtl: rtl_status,
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                        dots: false
                    },
                    720: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: items_val
                    }
                }
            });
        });
    } 
    
    // SERVICE.
    
      if ($(".service-carousel").length) {
        var $service_carousel = $('.service-carousel');
        $service_carousel.each(function () {
            var $this = $(this);
            
            var items_val = 3,
                   sm_items_val = 1, 
                    nav_val = true,
                    dots_val = true,
                    autoplay_val = true,
                    autoplaytimeout_val = 5000;
            // Status.
            if ($this.attr('data-carousel') && $this.data('carousel') !== 1) {
                
                $this.removeClass('owl-carousel');
                return '';
            }
            // no of items
            if ($this.attr('data-items') && !isNaN($this.data('items'))) {
                items_val = $this.data('items');
            }
            
            // no of items in small screen.
            if ($this.attr('data-sm-items') && !isNaN($this.data('sm-items'))) {
                sm_items_val = $this.data('sm-items');
            }
            
            // navigation status.
            if ($this.attr('data-nav') && !isNaN($this.data('nav'))) {
                nav_val = $this.data('nav');
            }
            
            // navigation status.
            if ($this.attr('data-dots') && !isNaN($this.data('dots'))) {
                dots_val = $this.data('dots');
            }
            // Autoplay status.
            if ($this.attr('data-autoplay') && !isNaN($this.data('autoplay'))) {
                autoplay_val = $this.data('autoplay');
            }
            // Autoplay status.
            if ($this.attr('data-autoplaytimeout') && !isNaN($this.data('autoplaytimeout'))) {
                autoplaytimeout_val = $this.data('autoplaytimeout');
            }
            
            $this.owlCarousel({
                rtl: rtl_status,
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: sm_items_val,
                        nav: false
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: items_val
                    }
                }
            });
        });
    } 
    
    // GALLERY.
    
    if ( $('.gallery-light-box').length ) {
            
        $('.gallery-light-box').venobox();
        
    }
    
    // FITERABLE GALLERY.
    
    $(".filter-button").on("click",function () {
        var value = $(this).attr('data-filter');

        if (value === "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.' + value).hide('3000');
            $('.filter').filter('.' + value).show('3000');

        }
    });
    
     // GALLERY CAROUSEL   
    
    if ($(".gallery-carousel").length ) {
        
        var $gallery_carousel = $('.gallery-carousel');
        
        $gallery_carousel.each(function () {

            var $this = $(this);
            
            var items_val = 5,
                    nav_val = false,
                    dots_val = true,
                    autoplay_val = true,
                    autoplaytimeout_val = 10000;


            // Status.
            if ($this.attr('data-carousel') && $this.data('carousel') !== 1) {
                
                $this.removeClass('owl-carousel');
                return '';
            }

            // no of items

            if ($this.attr('data-items') && !isNaN($this.data('items'))) {

                items_val = $this.data('items');
            }

            // navigation status.

            if ($this.attr('data-nav') && !isNaN($this.data('nav'))) {

                nav_val = $this.data('nav');

            }
            
            // navigation status.


            if ($this.attr('data-dots') && !isNaN($this.data('dots'))) {

                dots_val = $this.data('dots');

            }

            // Autoplay status.

            if ($this.attr('data-autoplay') && !isNaN($this.data('autoplay'))) {

                autoplay_val = $this.data('autoplay');
            }

            // Autoplay status.

            if ($this.attr('data-autoplaytimeout') && !isNaN($this.data('autoplaytimeout'))) {

                autoplaytimeout_val = $this.data('autoplaytimeout');
            }
            

            $this.owlCarousel({
                rtl: rtl_status,
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 2,
                        nav: false
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: items_val
                    }
                }
            });

        });
        
    }
    
    //CLIENTS LOGOS 
    
    if ($(".logo-items").length ) {
        
        var $logo_items = $('.logo-items');
        
        $logo_items.each(function () {

            var $this = $(this);
            
            var items_val = 6,
                    nav_val = false,
                    dots_val = true,
                    autoplay_val = true,
                    autoplaytimeout_val = 5000;


            // Status.
            if ($this.attr('data-carousel') && $this.data('carousel') !== 1) {
                
                $this.removeClass('owl-carousel');
                return '';
            }

            // no of items

            if ($this.attr('data-items') && !isNaN($this.data('items'))) {

                items_val = $this.data('items');
            }

            // navigation status.

            if ($this.attr('data-nav') && !isNaN($this.data('nav'))) {

                nav_val = $this.data('nav');

            }
            
            // navigation status.


            if ($this.attr('data-dots') && !isNaN($this.data('dots'))) {

                dots_val = $this.data('dots');

            }

            // Autoplay status.
 
            if ($this.attr('data-autoplay') && !isNaN($this.data('autoplay'))) {

                autoplay_val = $this.data('autoplay');
            }

            // Autoplay status.

            if ($this.attr('data-autoplaytimeout') && !isNaN($this.data('autoplaytimeout'))) {

                autoplaytimeout_val = $this.data('autoplaytimeout');
            }
            

            $this.owlCarousel({
                rtl: rtl_status,
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 2,
                        nav: false
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: items_val
                    }
                }
            });

        });
        
    }

    // TESTIMONIAL CAROUSEL.

    if ($(".testimonial-container").length) {

        var $testimonial_container = $('.testimonial-container');

        $testimonial_container.each(function () {

            var $this = $(this);
            
            var items_val = 2,
                    nav_val = false,
                    dots_val = true,
                    autoplay_val = true,
                    autoplaytimeout_val = 5000;


            // Status.
            if ($this.attr('data-carousel') && $this.data('carousel') !== 1) {
                
                $this.removeClass('owl-carousel');
                return '';
            }

            // no of items

            if ($this.attr('data-items') && !isNaN($this.data('items'))) {

                items_val = $this.data('items');
            }

            // navigation status.

            if ($this.attr('data-nav') && !isNaN($this.data('nav'))) {

                nav_val = $this.data('nav');

            }
            
            // navigation status.


            if ($this.attr('data-dots') && !isNaN($this.data('dots'))) {

                dots_val = $this.data('dots');

            }

            // Autoplay status.

            if ($this.attr('data-autoplay') && !isNaN($this.data('autoplay'))) {

                autoplay_val = $this.data('autoplay');
            }

            // Autoplay status.

            if ($this.attr('data-autoplaytimeout') && !isNaN($this.data('autoplaytimeout'))) {

                autoplaytimeout_val = $this.data('autoplaytimeout');
            }
            

            $this.owlCarousel({
                rtl: rtl_status,
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: items_val
                    }
                }
            });

        });


    } 
    
    // TEAM CAROUSEL.

    if ($(".team-carousel").length) {

        var $team_carousel = $('.team-carousel');

        $team_carousel.each(function () {

            var $this = $(this);
            
            var items_val = 3,
                    nav_val = false,
                    dots_val = true,
                    autoplay_val = true,
                    autoplaytimeout_val = 5000;


            // Status.
            if ($this.attr('data-carousel') && $this.data('carousel') !== 1) {
                
                $this.removeClass('owl-carousel');
                return '';
            }

            // no of items

            if ($this.attr('data-items') && !isNaN($this.data('items'))) {

                items_val = $this.data('items');
            }

            // navigation status.

            if ($this.attr('data-nav') && !isNaN($this.data('nav'))) {

                nav_val = $this.data('nav');

            }
            
            // navigation status.


            if ($this.attr('data-dots') && !isNaN($this.data('dots'))) {

                dots_val = $this.data('dots');

            }

            // Autoplay status.

            if ($this.attr('data-autoplay') && !isNaN($this.data('autoplay'))) {

                autoplay_val = $this.data('autoplay');
            }

            // Autoplay status.

            if ($this.attr('data-autoplaytimeout') && !isNaN($this.data('autoplaytimeout'))) {

                autoplaytimeout_val = $this.data('autoplaytimeout');
            }
            

            $this.owlCarousel({
                rtl: rtl_status,
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: items_val
                    }
                }
            });

        });

    } 
    
    //LATEST NEWS

      if ($("#latest_news").length) {

        $("#latest_news").owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 2,
                    nav: true,
                    loop: true
                }
            },
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        });
    }     

    // GOOGLE MAP FOR CONTACT & EVENT PAGE.

    if ($('#map_canvas').length) {

        var map;

        $('#map_canvas').css({
            'height': '400px'
        });

        map = new GMaps({
            div: '#map_canvas',
            lat: -12.043333,
            lng: -77.028333
        });
        
        map.addMarker({
            lat: -12.043333,
            lng: -77.028333,
            title: 'Lima',
            click: function (e) {
                alert('You clicked in this marker');
            }
        });

    }
    
    // VENOBOX VIDEO.
    
       $(document).ready(function(){
            $('.venobox').venobox();   
        });  

    // COUNTDOWN.
    
    if( $('#coming_countdown').length > 0 ) {
    
        $('#coming_countdown').countdown('2020/10/10', function (event) {
            var $this = $(this).html(event.strftime(''
                    + '<div class="countdown_container"><span class="count_number">%d</span><span class="count_text">Days</span></div>'
                    + '<div class="countdown_container"><span class="count_number">%H</span><span class="count_text">Hours</span></div>'
                    + '<div class="countdown_container"><span class="count_number">%M</span><span class="count_text">Miniutes</span></div>'
                    + '<div class="countdown_container"><span class="count_number">%S</span><span class="count_text">Seconds</span></div>'));
        });

    }      
        
    //WoW Animation.
    animations();

    // BACK TO TOP BUTTON.

    if ($('#backTop').length === 1) {

        $('#backTop').backTop({
            'theme': 'custom'
        });
        
    }

    var curr_Index = 0;
    // $(".picker-before").click(function() {
    //     curr_Index--;
    //     if( curr_Index < 0 ) curr_Index += 3;
    //     $(".pickup img").prop('src', $(".picker img:nth-child(" + (curr_Index + 1) + ")").prop('src')).prop('srcset', $(".picker img:nth-child(" + (curr_Index + 1) + ")").prop('srcset'));
    // })
    
    // $(".picker-next").click(function() {
    //     curr_Index++;
    //     curr_Index = curr_Index % 3;
    //     $(".pickup img").prop('src', $(".picker img:nth-child(" + (curr_Index + 1) + ")").prop('src')).prop('srcset', $(".picker img:nth-child(" + (curr_Index + 1) + ")").prop('srcset'));
    // })

    //image picker
    function pickupImage() {
        const $this = $(this);
        const currentIndex = $this.data('index');
        curr_Index = currentIndex;
        const $imagePicker = $this.parent();
        const $images = $imagePicker.find('img');
        const maxIndex = $imagePicker.data('max-index');
        const $target = $('.' + $imagePicker.data('target'));
        var newIndex = currentIndex;

        if ($target.length > 0) {
            $target.prop('src', $this.prop('src')).prop('srcset', $this.prop('srcset'));
        }
    }
    $('.picker').each(function (index, element) {
        const $imagePicker = $(element);
        var lastIndex = 0;

        $imagePicker.find('img').each(function (index, img) {
            $(img).data('index', index);
            lastIndex = index;
        });
        $imagePicker.data('maxIndex', lastIndex);
    });
    $('.picker img').on('click', pickupImage);

    // lightbox
    const $lightbox = $('#lightbox');
    const $lightboxImage = $('#lightbox img');
    const $lightboxSource = $('.photos .pickup img, img.lightbox');

    // $lightboxSource.on('click', function () {
    //     const $this = $(this);
    //     $('body').css({ 'overflow-y': 'hidden' });
    //     $lightboxImage.css({ opacity: 0.0 }).prop('src', $this.prop('src')).prop('srcset', $this.prop('srcset'));
    //     $lightbox.css({ display: 'flex' });
    //     $lightboxImage.css({ opacity: 1.0 });
    // });
    // $lightbox.on('click', function () {
    //     $('body').css({ 'overflow-y': 'scroll' });
    //     $lightbox.css({ display: 'none' });
    //     $lightboxImage.css({ opacity: 0.0 });
    // });

});