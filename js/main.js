(function ($) {

    // Menu active
    const currentLocation = window.location.toString();
    const currentPage = currentLocation.split('/').reverse();
    $('a[href$="'+currentPage[0]+'"]').closest('li').addClass('active');
    $('.navbar-minimalize').on('click', function (event) {
        event.preventDefault();

    // $(".minimalize-styl-2 .fa-chevron-left ").toggleClass("fa-rotate-180");
   

    // Search Modal
      // Modal Search
      const modalSearch = document.getElementById('modalSearch');
      // const myInput = document.getElementById('myInput')
  
      modalSearch.addEventListener('shown.bs.modal', () => {
      // myInput.focus()
      });



    });
})(jQuery);