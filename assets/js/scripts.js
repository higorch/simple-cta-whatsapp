(function($){

    var desktop = $('.cta-whatsapp.desktop');
    var mobile = $('.cta-whatsapp.mobile');

    $(window).load(function(){
        $(window).trigger('resize');
    });

    $(window).resize(function(e){

        e.preventDefault();
        e.stopPropagation();
        
        if ($(this).width() < 768) {

            desktop.hide();
            mobile.fadeIn(2000);

        } else {

            mobile.hide();
            desktop.fadeIn(2000);
        }

    });
    
})(jQuery);