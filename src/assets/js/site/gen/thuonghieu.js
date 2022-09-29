$(document).ready(function () {
    $('.slide_trademark_js').owlCarousel({
        loop: true,
        speed: 1000,
        dots: false,
        items: 1,
        margin: 30,
        autoplay: 2500,
        smartSpeed: 1000,

        responsive: {
            0: {
                nav: false,
            },

            768: {
                nav: true,
            },
        }
    });
});

