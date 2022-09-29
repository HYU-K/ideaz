$(document).ready(function () {
    $(".slide_destinations").slick({
        autoplay: false,
        dots: true,
        arrows: false,
        infinite: false,
        customPaging : function(slider, i) {
        var thumb = $(slider.$slides[i += 1]).data();
        return '<a class="dot">'+'0'+i+'</a>';
                },
        responsive: [{ 
            breakpoint: 500,
            settings: {
                dots: false,
            } 
        }]
    });

    $('.news_slide-js').owlCarousel({
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

