$(function(){
    $('.btn-menu-open').click(function(){
        $('#mobile').slideToggle('slow',);
        $('.btn-menu-open').fadeOut('slow');
        $('.btn-menu-close').fadeIn('slow');
    });

    $('.btn-menu-close').click(function(){
        $('#mobile').slideToggle('slow');
        $('.btn-menu-open').fadeIn('slow');
        $('.btn-menu-close').fadeOut('slow');
    });
});