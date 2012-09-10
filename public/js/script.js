/* Author:

*/
$(window).resize(function() {
    $('.left-wrapper, .right-wrapper').width(($(window).width() - $('header .container').width())/2);
    $('.right-footer').css('top', ($('footer').position().top - 12) + 'px');
});

jQuery(document).ready(function($) {
    $(window).resize();

});




