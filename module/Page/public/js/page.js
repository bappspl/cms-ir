$("#full-img-slide").backstretch([
    "img/image-1.jpg"
], {
    fade: 750,
    duration: 6000
});
$(document).ready(function(){
    $(function(){
        var shrinkHeader = 250;
        $(window).scroll(function() {
            var scroll = getCurrentScroll();
            if ( scroll >= shrinkHeader ) {
                $('.top-navbar').addClass('shrink-nav');
            }
            else {
                $('.top-navbar').removeClass('shrink-nav');
            }
        });
        function getCurrentScroll() {
            return window.pageYOffset || document.documentElement.scrollTop;
        }
    });
})