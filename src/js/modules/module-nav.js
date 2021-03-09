var closed = true;

$('.hamburger').click(function () {

    if ( closed == false) {

        $(this).removeClass('open');
        $(this).addClass('closed');

        $('.mobile-menu').removeClass('slide');
        closed = true;

    } else {

        $(this).removeClass('closed');
        $(this).addClass('open');

        $('.mobile-menu').addClass('slide');
        closed = false;

    }

});

$('.mobile-menu li a').click(function () {
    $('.hamburger').removeClass('open');
    $('.hamburger').addClass('closed');
    $('.mobile-menu').removeClass('slide');
    closed = true;
});
