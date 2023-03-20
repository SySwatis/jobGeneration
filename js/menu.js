(function ($) {

    // Menu active
    const currentLocation = window.location.toString();
    const currentPage = currentLocation.split('/').reverse();
    $('a.nav-link[href$="'+currentPage[0]+'"]').closest('.nav-item').addClass('active');

    // Menu subMenu
    const menuExpanded = function () {
        $('a.nav-link').each(function(){
            // For some browsers, `attr` is undefined; for others,
            // `attr` is false.  Check for both.
            var attrAriaExpanded = $(this).attr('aria-expanded');
            if (typeof attrAriaExpanded !== 'undefined' && attrAriaExpanded == 'true')
            $(this).attr('aria-expanded',false).next('.nav').addClass('hidden');
        });
    }

    menuExpanded();

    $('a.nav-link').on('click',function(event){

        event.preventDefault();
        const attrAriaExpanded = $(this).attr('aria-expanded');

        menuExpanded();
        
        // For some browsers, `attr` is undefined; for others,
        // `attr` is false.  Check for both.

        if(typeof attrAriaExpanded !== 'undefined' && attrAriaExpanded == 'true') {
            return;
        }
    
        $('.nav-item').removeClass('active');
        $(this).closest('.nav-item').addClass('active');
        
        if (typeof attrAriaExpanded !== 'undefined' && attrAriaExpanded == 'true') {
            $(this).attr('aria-expanded',false);
            $(this).next('.nav').addClass('hidden');
        }
        if (typeof attrAriaExpanded !== 'undefined' && attrAriaExpanded == 'false') {
            $(this).attr('aria-expanded',true);
            $(this).next('.nav').removeClass('hidden');
        }
    });

    $('.navbar-minimalize').on('click', function (event) {
        event.preventDefault();
        $('.navbar-default').toggleClass('overflow-auto');
    });

})(jQuery);