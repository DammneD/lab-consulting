$(function () {

	//  Preloader

	var $preloader = $('.page-preloader'),
        $svg_anm   = $preloader.find('.cssload-inner');
	    $svg_anm.fadeOut();
	    $preloader.delay(450).fadeOut('slow');

	// Parallax

	$window = $(window);
  	$('[data-type="parallax"]').each(function () {
  		var $bgObject = $(this);
  		$(window).scroll(function () {
  			var yPos = -($window.scrollTop () / $bgObject.data('speed'));
  			var cord = '50%' + yPos + 'px';
  			$bgObject.css ({ backgroundPosition: cord });
  		});
  	});

	// Humburger

	$('.mobile-menu').click(function () {
		$('.navigation-mobile').toggleClass('d-none').css('order','1');
		$('.navigation__menu').toggleClass('navigation__menu_style');
	});

	$('.navigation__link').click(function () {
		$('.navigation-mobile').addClass('d-none');
		$('.navigation__menu').removeClass('navigation__menu_style');
	});

	// Scroll

	$('.move-btn').click(function() {
		elementClick = $(this).attr('href');
		destination = $(elementClick).offset().top;
		$('body,html').animate({scrollTop: destination}, 800);
	});

	// Modal window

	$('.call-back, .consult-card__btn').click(function (e) {
		e.preventDefault();
		$('#exampleModal').arcticmodal();
	});		

	// Slider

	$('.consult-nav__slider-body').slick( {
	    dots: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
	   	nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>'
  	}); 	
	
});