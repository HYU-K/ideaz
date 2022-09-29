$(document).ready(function () {
    $(".slide_destinations").slick({
        autoplay: false,
        dots: true,
        arrows: false,
        infinite: false,
        customPaging: function (slider, i) {
            var thumb = $(slider.$slides[i += 1]).data();
            return '<a class="dot">' + '0' + i + '</a>';
        },
    });
});


