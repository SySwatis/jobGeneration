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
};

// login

$("#loginForm input").on("click", function (e) {
  e.preventDefault();
  scrollToElement("#loginForm", false);
});

// showMyModal('modal/beneficiaires/edit','#myModalContent');

// Ajax content by link

setContentAjax = function () {
  $("a").on("click", function (event) {
    if ($(this).attr("href") === "#" || $(this).hasClass("no-ajax")) {
      return;
    } else {
      event.preventDefault();
      $("#myModal").modal("hide");
      ajaxUrl = $(this).attr("href");
      new ajaxInner(ajaxUrl, "#content");
    }
    return;
  });
};

setContentAjax();

//})(jQuery);

let globalJs = function () {
  setContentAjax();

  //document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById("calendar");
  if (calendarEl !== null) {
    var calendar = new FullCalendar.Calendar(calendarEl, {
      locale: "fr",
      themeSystem: "bootstrap5",
      buttonIcons: {
        prev: "dsb fa fa-chevron-left",
        next: "dsb fa fa-chevron-right",
        prevYear: "chevrons-left", // double chevron
        nextYear: "chevrons-right", // double chevron
      },
      initialView: "dayGridMonth",
      events: [
        {
          title: "Rendez-vous",
          start: "2023-06-23", // Exemple de rendez-vous pour demain
        },
      ],
      dateClick: function(info) {
        var bsOffcanvas = new bootstrap.Offcanvas('#offcanvasBeneList');
        bsOffcanvas.show();
        // alert('Clicked on: ' + info.dateStr);
        // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
        // alert('Current view: ' + info.view.type);
        // // change the day's background color just for fun
        info.dayEl.style.backgroundColor = 'red';
      },
    });
    calendar.render();
  }
  // });

  return console.log("callback ajax js");
};
