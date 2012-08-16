(function($){
    /* Active slider */
    $('#slider').orbit({
        animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
        animationSpeed: 800,                // how fast animtions are
        timer: true,                        // true or false to have the timer
        advanceSpeed: 4000,                 // if timer is enabled, time between transitions 
        pauseOnHover: false,                // if you hover pauses the slider
    });
    /* Active gallery lightbox */
    $(".fancybox").fancybox({
        autoDimension: false,
        overlayShow: false,
        width: '75%',
        height: '75%',
        titlePosition: 'outside',
        titleShow: true,
        centerOnScroll: true,
        hideOnContentClick: true,
        closeBtn: false,
        autoScale: false,
        helpers: {
            title: { type : 'inside' },
            buttons: {}
        }
    });
    $(function(){
        $(document).foundationMediaQueryViewer();
        $(document).foundationAlerts();
        $(document).foundationAccordion();
        $(document).tooltips();
        $('input, textarea').placeholder();
        $(document).foundationButtons();
        $(document).foundationNavigation();
        $(document).foundationCustomForms();
        $(document).foundationTabs({callback:$.foundation.customForms.appendCustomMarkup});
        $("#featured").orbit();
        // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
        // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'left'});
        // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'left'});
        // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'left'});
        // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'left'});
    });
})(jQuery);