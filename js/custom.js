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
    jQuery('.sidebar-widget ul li a').click(function () {
      jQuery('.sidebar-widget ul li a').toggleClass('active');
      jQuery("#menucat-4").scrollTop() + 120;
      console.log(jQuery(".menu-inner-content").scrollTop() + ' px');
      var scroll_pos = '120px';  
      jQuery(".menu-inner-content > div").addClass('test');
      jQuery('.menu-inner-content').animate({
        scrollTop: scroll_pos
    }, 500);
  });
    jQuery('.tabs li:first-child').addClass('active');
    jQuery('.navbar-nav li a').addClass('nav-link hvr-underline-from-center');
    jQuery('.navbar-nav li').addClass('nav-item');
});
if (jQuery(window).width() <= 991) {
    jQuery(".wow").removeClass("wow");
}
jQuery(window).load(function () {
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animate__animated',
        offset: 0,
        mobile: 'off',
        live: true
    });
    wow.init();  
});

// Helper function for add element box list in WOW
WOW.prototype.addBox = function (element) {
    this.boxes.push(element);
};
// Init WOW.js and get instance
var wow = new WOW();
wow.init();
// Attach scrollSpy to .wow elements for detect view exit events,
// then reset elements and add again for animation
/*
jQuery('.wow').on('scrollSpy:exit', function () {
    jQuery(this).css({
        'visibility': 'hidden',
        'animation-name': 'none'
    }).removeClass('animate__animated');
    wow.addBox(this);
}).scrollSpy();
*/
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
    animateOut: 'fadeOut',
    navText: ["<span class='nav-icon icon-arrow-left7 hvr-forward'></span>", "<span class='nav-icon icon-arrow-right7 hvr-backward'></span>"],
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
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    autoplay: true,
    lazyLoad: true,
    center: true,
    navText: ["<span class='fa fa fa-arrow-circle-left'></span>", "<span class='fa fa-arrow-circle-right'></span>"],
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
jQuery(document).ready(function () {
    

    setTimeout(function () {
        jQuery('body').addClass('loaded');
        //jQuery('h1').css('color','#222222');
    }, 3000);

});
jQuery('body').toggleClass('loaded');

// Fixed menu
jQuery(".banner-wrapper").waypoint(function () {
    jQuery(".btm-header").toggleClass("navbar-fixed-top animate__animated animate__fadeInDown");
    jQuery(".btm-header.js-toggleClass").toggleClass("js-toggleClass");
    return false;
}, {offset: '-0.1px'});
// Counter animation
// inViewport jQuery plugin
// http://stackoverflow.com/a/26831113/383904
jQuery(function(jQuery, win) {
    jQuery.fn.inViewport = function(cb) {
      return this.each(function(i,el){
        function visPx(){
          var H = jQuery(this).height(),
              r = el.getBoundingClientRect(), t=r.top, b=r.bottom;
          return cb.call(el, Math.max(0, t>0? H-t : (b<H?b:H)));  
        } visPx();
        jQuery(win).on("resize scroll", visPx);
      });
    };
  }(jQuery, window));
  jQuery(function(jQuery) { // DOM ready and jQuery in scope
  
    jQuery(".counter-no").inViewport(function(px) { // Make use of the `px` argument!!!
      // if element entered V.port ( px>0 ) and
      // if prop initNumAnim flag is not yet set
      //  = Animate numbers
      if(px>0 && !this.initNumAnim) { 
        this.initNumAnim = true; // Set flag to true to prevent re-running the same animation
        jQuery(this).prop('Counter',0).animate({
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