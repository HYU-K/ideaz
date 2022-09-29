// các function dùng cho toàn site
AOS.init();

new WOW().init();

// check elm in page
function isInPage(_elm) {
	return $(_elm).length > 0 ? true : false;
}

// check elm in viewport
function isInViewport(_select) {
	let el = document.querySelector(_select);
	if (isInPage(_select)) {
		let top = el.offsetTop;
		let left = el.offsetLeft;
		const width = el.offsetWidth;
		const height = el.offsetHeight;

		while (el.offsetParent) {
			el = el.offsetParent;
			top += el.offsetTop;
			left += el.offsetLeft;
		}

		return (
			top < window.pageYOffset + window.innerHeight &&
			left < window.pageXOffset + window.innerWidth &&
			top + height > window.pageYOffset &&
			left + width > window.pageXOffset
		);
	}
	return false;
}

$(document).ready(function () {
	$(window).scroll(function (event) {
		const pos_body = $('html,body').scrollTop();
		// console.log(pos_body);
		if (pos_body > 20) {
			$('.head_col0').addClass('croll');
		} else {
			$('.head_col0').removeClass('croll');
		}
	});

	$(function () {
		new WOW().init();
	});

	$(document).scroll(scrolled);
	$(document).ready(scrolled);

	const scroll_line = 260;

	function scrolled() {
		const images = $('.item-banner'); // get all images via classname
		for (var i = 1; i < images.length; i++) {
			const pos = images.eq(i).offset().top - $(document).scrollTop(); // get absolute position of image regarding scroll
			if (pos > scroll_line) {
				// image is inside screen
				break; // found image in screen, done
			}
		}
		const current_image = i;

		$('#image_number').html(current_image + '/' + images.length); // output image number (assuming your display has id 'image_number')
	}

	$(function () {
		function slideMenu() {
			const width = $(window).width();
			const activeState = $('.menu-top .menu_main').hasClass('active');
			$('.menu-top .menu_main').animate(
				{
					left: activeState ? '0' : '-100%',
				},
				400,
			);
		}

		$('.menu-wrapper').click(function (event) {
			event.stopPropagation();
			$('.hamburger').toggleClass('open');
			$('.menu-top .menu_main').toggleClass('active');
			slideMenu();

			$('body').toggleClass('overflow-hidden');
		});

		$('.menu_main')
			.find('.accordion-toggle')
			.click(function () {
				$('.menu_main .accordion-content').not($(this).next()).slideUp('fast').removeClass('open');
				$('.menu_main .accordion-toggle').not(jQuery(this)).removeClass('active-tab').find('.menu-link').removeClass('active');
			});
	}); // jQuery load
});

$(document).ready(function () {
	$(window).scroll(function (event) {
		const pos_body = $('html,body').scrollTop();

		if (pos_body > 1000) {
			$('#image_number').addClass('show');
		} else {
			$('#image_number').removeClass('show');
		}
	});

	// $(window).scroll(function (event) {
	//     var pos_body = $('html,body').scrollTop();
	//     // console.log(pos_body);
	//     if (pos_body < 2000) {
	//         $('.arcontactus-share').addClass('show');
	//     } else {
	//         $('.arcontactus-share').removeClass('show');
	//     }
	// });

	$('.backtotop').click(function () {
		$('html, body').animate(
			{
				scrollTop: 100,
			},
			700,
		);
		return false;
	});

	$(window).resize(function () {
		console.log(width);
	});
});

jQuery(document).ready(function ($) {
	$('.tabs-list').pwstabs({
		effect: 'scale',
		defaultTab: 1,
	});
});

$(document).ready(function () {
	$('#slidein-banner').owlCarousel({
		loop: true,
		margin: 0,
		nav: false,
		autoplay: true,
		items: 1,
		dots: false,
	});

	$('.partners-js').slick({
		rows: 2,
		dots: false,
		arrows: false,
		infinite: true,
		autoplay: true,
		speed: 1000,
		slidesToShow: 6,
		slidesToScroll: 6,

		responsive: [
			{
				breakpoint: 360,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
				},
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
				},
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 5,
				},
			},
		],
	});
});
