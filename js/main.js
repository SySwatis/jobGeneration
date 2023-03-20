(function ($) {

    // login

    function scrollToElement(targetEl,windowHash) {
        $targetEl = $(targetEl);
        $('html, body').stop().animate({
            'scrollTop': $targetEl.offset().top
        }, 100, 'swing', function () {
            if(windowHash)
            window.location.hash = targetEl;
        });
    }

    $('#loginForm input').on('click',function(e){
        e.preventDefault();
        scrollToElement('#loginForm',false);
    })

})(jQuery);