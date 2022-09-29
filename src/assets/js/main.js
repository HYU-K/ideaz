$(document).ready(function () {
    // if ($(window).width() < 1200) {
    //     var table = $('table');
    //     $('table').parent().css('overflow-y', 'auto');
    // }
    $(".video-youtube").each(function () {
        $(this).height($(this).width() * 0.564);
    });
    $(".box-squatity").each(function () {
        $(this).height($(this).closest('.list-box-fx').find('.box-squatity').first().width());
    });
});