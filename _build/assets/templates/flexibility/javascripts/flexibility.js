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