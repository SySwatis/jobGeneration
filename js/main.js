//(function ($) {

  // functions

  scrollToElement = function (targetEl, windowHash) {
    $targetEl = $(targetEl);
    $("html, body")
      .stop()
      .animate(
        {
          scrollTop: $targetEl.offset().top,
        },
        100,
        "swing",
        function () {
          if (windowHash) window.location.hash = targetEl;
        }
      );
  }

  // login

  $("#loginForm input").on("click", function (e) {
    e.preventDefault();
    scrollToElement("#loginForm", false);
  });

  // showMyModal('modal/beneficiaires/edit','#myModalContent');
  

  // Ajax content by link

  $("a").on("click", function (event) {
    if ($(this).attr("href") === "#" || $(this).hasClass("no-ajax")) {
      return;
    } else {
      event.preventDefault();
      ajaxUrl = $(this).attr("href");
      new ajaxInner(ajaxUrl, "#content");
    }
    return;
  });


  

//})(jQuery);

let globalJs = function() {


  //document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    if(calendarEl!==null) {
    var calendar = new FullCalendar.Calendar(calendarEl, {
      locale: 'fr',
      themeSystem: 'bootstrap5',
      buttonIcons: {
      prev: 'dsb fa fa-chevron-left',
      next: 'dsb fa fa-chevron-right',
      prevYear: 'chevrons-left', // double chevron
      nextYear: 'chevrons-right' // double chevron
      },
          initialView: 'dayGridMonth',
      events: [
        {
          title: 'Rendez-vous',
          start: '2023-05-23' // Exemple de rendez-vous pour demain
        }
      ]
    });
    calendar.render();
  }
 // });

  return console.log('callback ajax js')
 }