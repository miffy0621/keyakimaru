$(function() {
    $('.openbtn2').on('click', function() {
        $('.open').slideToggle();
        $(this).toggleClass('active');
    });
});