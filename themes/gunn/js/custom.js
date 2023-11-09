jQuery(document).ready(function () {
//Hover Menu Dropdown in Bootstrap
    jQuery('ul.navbar-nav li.dropdown').hover(function () {
        jQuery(this).find('.dropdown-menu').stop(true, true).show();
        jQuery(this).addClass('open');
    }, function () {
        jQuery(this).find('.dropdown-menu').stop(true, true).hide();
        jQuery(this).removeClass('open');
    });
// Scroll to top
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.scrollup').fadeIn();
        } else {
            jQuery('.scrollup').fadeOut();
        }
    });

    jQuery('.scrollup').click(function () {
        jQuery("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    jQuery(".slide-toggle").click(function () {
        jQuery(".box").animate({
            width: "toggle"
        });
    });
    jQuery('.fancybox').fancybox();
    
    
    //Add div clearfix after 3 list
    jQuery("ul.services-ul li:nth-child(3n)").after("<div class='clearfix'></div>")
});
if (jQuery(window).width() <= 991) {
    jQuery(".wow").removeClass("wow");
}
jQuery(window).load(function () {
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: off,
        live: true
    });
    wow.init();
});

// Repeat demo content
var jQuerybody = jQuery('body');
var jQuerybox = jQuery('.box');
for (var i = 0; i < 20; i++) {
    jQuerybox.clone().appendTo(jQuerybody);
}

// Helper function for add element box list in WOW
WOW.prototype.addBox = function (element) {
    this.boxes.push(element);
};
// Init WOW.js and get instance
var wow = new WOW();
wow.init();
// Attach scrollSpy to .wow elements for detect view exit events,
// then reset elements and add again for animation
jQuery('.wow').on('scrollSpy:exit', function () {
    jQuery(this).css({
        'visibility': 'hidden',
        'animation-name': 'none'
    }).removeClass('animated');
    wow.addBox(this);
}).scrollSpy();
// Banner
jQuery('.owl-banner').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    autoplay: true,
    video: true,
    lazyLoad: true,
    center: true,
    videoHeight: 450,
    videoWidth: 100 + '%',
    navText: ["<span class='icon icon-arrow-left7 hvr-forward'></span>", "<span class='icon icon-arrow-right7 hvr-backward'></span>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
jQuery('.owl-testimonial').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
});

jQuery('.owl-brands').owlCarousel({
    autoplay: true,
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

jQuery(document).ready(function () {

    jQuery('.navbar-nav li').addClass('nav-item');
    jQuery('.navbar-nav > li > a').addClass('nav-link hvr-sweep-to-top');
    jQuery('.sub-menu > li > a').addClass('dropdown-item hvr-sweep-to-right');

});
jQuery('body').toggleClass('loaded');

// Fixed menu
jQuery("header").waypoint(function () {
    jQuery(".navmenu").toggleClass("navbar-fixed-top animated fadeInDown");
    jQuery(".navmenu.js-toggleClass").toggleClass("js-toggleClass");
    return false;
}, {offset: '-0.1px'});

// Counter animation
// inViewport jQuery plugin
// http://stackoverflow.com/a/26831113/383904
jQuery(function (jQuery, win) {
    jQuery.fn.inViewport = function (cb) {
        return this.each(function (i, el) {
            function visPx() {
                var H = jQuery(this).height(),
                        r = el.getBoundingClientRect(), t = r.top, b = r.bottom;
                return cb.call(el, Math.max(0, t > 0 ? H - t : (b < H ? b : H)));
            }
            visPx();
            jQuery(win).on("resize scroll", visPx);
        });
    };
}(jQuery, window));
jQuery(function (jQuery) { // DOM ready and $ in scope

    jQuery(".counter-no").inViewport(function (px) { // Make use of the `px` argument!!!
        // if element entered V.port ( px>0 ) and
        // if prop initNumAnim flag is not yet set
        //  = Animate numbers
        if (px > 0 && !this.initNumAnim) {
            this.initNumAnim = true; // Set flag to true to prevent re-running the same animation
            jQuery(this).prop('Counter', 0).animate({
                Counter: jQuery(this).text()
            }, {
                duration: 10000,
                step: function (now) {
                    jQuery(this).text(Math.ceil(now));
                }
            });
        }
    });
});
