$(function (){
    $('.btn-menu-open').on('click', function(){
        $('.btn-menu-open').css('display','none');
        $('.btn-menu-close').fadeIn('slow');
        $('.mobile ul').fadeIn('slow');
    });

    $('.btn-menu-close').on('click', function(){
        $('.btn-menu-open').fadeIn('slow');
        $('.btn-menu-close').css('display','none');
        $('btn-mneu-close').fadeOut('slow');
        $('.mobile ul').fadeOut('slow');
    });
});