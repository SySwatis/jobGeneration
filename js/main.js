(function ($) {

    // Menu active
    const currentLocation = window.location.toString();
    const currentPage = currentLocation.split('/').reverse();
    $('a[href$="'+currentPage[0]+'"]').closest('li').addClass('active');

})(jQuery);