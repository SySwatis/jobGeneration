(function ($) {

    // functions

    function scrollToElement(targetEl,windowHash) {
        $targetEl = $(targetEl);
        $('html, body').stop().animate({
            'scrollTop': $targetEl.offset().top
        }, 100, 'swing', function () {
            if(windowHash)
            window.location.hash = targetEl;
        });
    }


      // login

    $('#loginForm input').on('click',function(e){
        e.preventDefault();
        scrollToElement('#loginForm',false);
    });



})(jQuery);