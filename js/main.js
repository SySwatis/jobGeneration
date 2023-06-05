// main.js

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

// Full Calendar

let setCalendar = function() {
  var calendarEl = document.getElementById("calendar");
  if (calendarEl !== null) {
    var calendar = new FullCalendar.Calendar(calendarEl, {
      schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
      timeZone: 'UTC',
      locale: "fr",
      themeSystem: "bootstrap5",
      buttonIcons: {
        prev: "dsb fa fa-chevron-left",
        next: "dsb fa fa-chevron-right",
        prevYear: "chevrons-left", // double chevron
        nextYear: "chevrons-right", // double chevron
      },
      eventClick: function(info) {
        var bsOffcanvas = new bootstrap.Offcanvas('#offcanvasBeneList');
        bsOffcanvas.show();
        // alert('Clicked on: ' + info.dateStr);
        // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
        // alert('Current view: ' + info.view.type);
        // // change the day's background color just for fun
        info.el.style.backgroundColor = 'red';
      },
      headerToolbar: {
        left: 'prev,next',
        center: 'title',
        right: 'resourceTimelineDay,resourceTimelineSevenDay,resourceTimelineMonth'
      },
      buttonText: {
        day: 'Jour'
      },
      initialView: 'resourceTimelineDay',
      scrollTime: '07:00',
      aspectRatio: 1.5,
      views: {
        // resourceTimelineDay: {
        //   buttonText: ':15 slots',
        //   slotDuration: '00:15'
        // },
        resourceTimelineSevenDay: {
          type: 'resourceTimeline',
          duration: { days: 7 },
          buttonText: 'Semaine'
        },
        resourceTimelineMonth: {
          buttonText: 'Mois'
        },
      },
      editable: true,
      resourceAreaHeaderContent: 'Villes',
      resources: 'https://fullcalendar.io/api/demo-feeds/resources.json?with-nesting&with-colors',
      events: 'https://fullcalendar.io/api/demo-feeds/events.json?single-day&for-resource-timeline'
    });

    calendar.render();
  }
}

// Global callback for ajax

let globalJs = function () {
  setContentAjax();
  if($('#calendar').length){
    setCalendar();
  }
};


// init

setContentAjax();
