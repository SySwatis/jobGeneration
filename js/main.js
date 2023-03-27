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


    // Ajax content


    function xajax_affiche_info (id) {

        alert(id);

    }



$('a').on('click',function(event){

    if($(this).attr('href')==='#' || $(this).hasClass('no-ajax')) {
        return;
    } else {
        event.preventDefault();
        ajaxUrl = $(this).attr('href');
        new ajaxInner(ajaxUrl);
    }

    return;
  
});





})(jQuery);