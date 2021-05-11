$(function(){
    $('.btn-menu-open').click(function(){
        $('#mobile').slideToggle('slow',);
        $('.btn-menu-open').fadeToggle('slow','linear');
        $('.btn-menu-close').fadeToggle('slow','linear');
    });

    $('.btn-menu-close').click(function(){
        $('#mobile').slideToggle('slow');
        $('.btn-menu-open').fadeToggle('slow','linear');
        $('.btn-menu-close').fadeToggle('slow','linear');
    });
});