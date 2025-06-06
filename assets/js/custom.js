// Initialize slick slider
jQuery(document).ready(function () {
    jQuery('.main_slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        cssEase: 'linear',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false
                }
            }
        ]
    });
});

// Retina logo handling
jQuery(window).load(function () {
    var retina = window.devicePixelRatio > 1 ? true : false;
    if (retina) {
        var retinaEl = jQuery("#logo img");
        var retinaLogoW = retinaEl.width();
        var retinaLogoH = retinaEl.height();
        retinaEl.attr("src", "assets/images/kafou-logo.png").width(retinaLogoW).height(retinaLogoH);
    }
});

// Google Analytics
window.dataLayer = window.dataLayer || [];
function gtag() { dataLayer.push(arguments); }
gtag('js', new Date());
gtag('config', 'G-SS8V5CCDMZ');

// Mobile menu toggle
jQuery(document).ready(function() {
    jQuery('.responsive-menu-toggle').on('click', function(e) {
        e.preventDefault();
        jQuery('#menu').toggleClass('active');
    });
});

// Smooth scroll for anchor links
jQuery(document).ready(function() {
    jQuery('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = this.hash;
        var $target = jQuery(target);
        
        jQuery('html, body').animate({
            'scrollTop': $target.offset().top - 100
        }, 800, 'swing');
    });
}); 