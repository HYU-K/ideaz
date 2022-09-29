const swiper = new Swiper('.thumbs', {
	spaceBetween: 10,
	slidesPerView: 5,
	freeMode: true,
	grabCursor: true,
	watchSlidesProgress: true,
	breakpoints: {
		// when window width is >= 320px
		320: {
			slidesPerView: 3,
		},
		// when window width is >= 480px
		480: {
			slidesPerView: 4,
		},
		// when window width is >= 960px
		960: {
			slidesPerView: 5,
		},
	},
});

new Swiper('.gallery', {
	spaceBetween: 16,
	autoHeight: true,
	zoom: true,
	navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
	thumbs: { swiper },
	breakpoints: {
		// when window width is >= 320px
		320: {
			slidesPerView: 'auto',
			loop: true,
		},
		// when window width is >= 960px
		960: {
			slidesPerView: 1,
			loop: false,
		},
	},
});

new Swiper('.hero', {
	spaceBetween: 10,
	loop: true,
	autoHeight: true,
	autoPlay: true,
	pagination: {
		el: '.swiper-pagination',
	},
});

new Swiper('.related', {
	spaceBetween: 16,
	slidesPerView: 1,
	grabCursor: true,
	watchSlidesProgress: true,
	navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
	breakpoints: {
		960: {
			slidesPerView: 4,
		},
	},
});
new Swiper('.awards', {
	spaceBetween: 16,
	slidesPerView: 1,
	grabCursor: true,
	pagination: {
		el: '.swiper-pagination',
	},
	breakpoints: {
		960: {
			slidesPerView: 4,
		},
	},
});
