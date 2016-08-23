jQuery(document).ready(function(){
	jQuery('.slick-carousel-home').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		prevArrow: '<div class="slidebx-carousel-prev"></div>',
		nextArrow: '<div class="slidebx-carousel-next"></div>',
		responsive: [
			{
				breakpoint: 1700,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 1000,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	jQuery('.slick-classic-home').slick({
		dots: false,
		infinite: true,
		speed: 300,
		prevArrow: '<div class="slidebx-carousel-prev slidebx-classic"></div>',
		nextArrow: '<div class="slidebx-carousel-next slidebx-classic"></div>'
	})
});