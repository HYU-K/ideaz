$(document).ready(function() {
    $('.new_slide-js').owlCarousel({
        loop: true,
        speed: 1000,
        nav: false,
        dots: false,
        margin: 30,
        autoplay: true,

        responsive: {
            0: {
                items: 1.2,
                margin: 8,
            },
            475: {
                items: 1.4,
                margin: 16,
            },
            768: {
                items: 2,
                margin: 20,
            },
            992: {
                items: 2.4,
                margin: 30,
            },
            1200: {
                items: 3,
            },
        }
    });
});
