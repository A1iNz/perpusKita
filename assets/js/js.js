$(function ($) {
    $('#top').hide();
    var curScroll = $(window).scrollTop();
    $(window).scroll(function () {
        if (curScroll < $(window).scrollTop())
            $('#top').show();
        if ($(window).scrollTop() == 0)
            $('#top').hide();
        curScroll = $(window).scrollTop();
    });
});