$(document).ready(function(){
	var touch = $('#touch-menu');
	var menu = $('.nav');

	$(touch).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	$(window).resize(function(){
		var wid = $(window).width();
		if(wid > 1220 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});


	$('.partners-slider').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 4,
		autoplay: true,
		arrows: false,
		responsive: [
		{
			breakpoint: 1000,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 4,
				infinite: true,
				dots: true
			}
		},
		{
			breakpoint: 600,
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
});