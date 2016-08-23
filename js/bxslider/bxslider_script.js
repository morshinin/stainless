jQuery(document).ready(function () {
    jQuery('#slidebx-carousel-1').bxSlider({
        minSlides: 1,
        maxSlides: 4,
        controls: true,
        slideWidth: 250,
        slideMargin: 70,
        infiniteLoop: true,
        pager: false,
        nextSelector: '#carousel-1-next',
        prevSelector: '#carousel-1-prev',
        nextText: '<img src="http://localhost/wordpress/wp-content/themes/stainless/img/Next.png" width="50" height="50">',
        prevText: '<img src="http://localhost/wordpress/wp-content/themes/stainless/img/Previous.png" width="50" height="50">'
    });
    jQuery('#slidebx-carousel-2').bxSlider({
        minSlides: 1,
        maxSlides: 4,
        controls: true,
        slideWidth: 250,
        slideMargin: 70,
        infiniteLoop: true,
        pager: false,
        nextSelector: '#carousel-2-next',
        prevSelector: '#carousel-2-prev',
        nextText: '<img src="http://localhost/wordpress/wp-content/themes/stainless/img/Next.png" width="50" height="50">',
        prevText: '<img src="http://localhost/wordpress/wp-content/themes/stainless/img/Previous.png" width="50" height="50">'
    });
    jQuery('.slidebx-classic').bxSlider({
        nextSelector: '#slidebx-classic-next',
        prevSelector: '#slidebx-classic-prev',
        nextText: '<img src="http://localhost/wordpress/wp-content/themes/stainless/img/Next.png" width="50" height="50">',
        prevText: '<img src="http://localhost/wordpress/wp-content/themes/stainless/img/Previous.png" width="50" height="50">'
    });
})