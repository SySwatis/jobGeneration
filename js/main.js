(function ($) {

    // login

    function scrollToElement(targetEl) {
        $targetEl = $(targetEl);
        $('html, body').stop().animate({
            'scrollTop': $targetEl.offset().top
        }, 100, 'swing', function () {
            window.location.hash = targetEl;
        });
    }

    $('#loginForm input').on('click',function(e){
        e.preventDefault();
        scrollToElement('#loginForm');
    })

})(jQuery);