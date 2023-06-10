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

      // Demo alert
      if(ajaxUrl==='page/dashboard') {
        new ajaxInner('alert/warning', "#alert");
      }
      if(ajaxUrl==='page/list-beneficiaires') {
        new ajaxInner('alert/beneficiaires', "#alert");
      }
      if(ajaxUrl==='page/agenda') {
        new ajaxInner('alert/success', "#alert");
      }

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
      // dayMaxEvents: true, // allow "more" link when too many events
      locale: "fr",
      themeSystem: "bootstrap5",
      buttonIcons: {
        prev: "dsb fa fa-chevron-left",
        next: "dsb fa fa-chevron-right",
        prevYear: "chevrons-left", // double chevron
        nextYear: "chevrons-right", // double chevron
      },
      eventDidMount: function(info) {
        var eventElement = info.el;
        var eventTitle = info.event.title;
        var eventDescription = info.event.extendedProps.description;
      
        eventElement.setAttribute('data-bs-toggle', 'tooltip');
        eventElement.setAttribute('data-bs-placement', 'top');
        eventElement.setAttribute('title','<h3>' + eventTitle + '</h3>' + eventDescription);
        eventElement.setAttribute('data-bs-html', 'true');
      
        // Initialise le tooltip Bootstrap avec une classe personnalisée
        var tooltip = new bootstrap.Tooltip(eventElement, {
          template: '<div class="tooltip fullcalendar-tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>'
        });
      
        // Activation du tooltip lors du survol de la souris
        eventElement.addEventListener('mouseenter', function () {
          tooltip.show();
        });
      
        // Désactivation du tooltip lorsque la souris quitte l'événement
        eventElement.addEventListener('mouseleave', function () {
          tooltip.hide();
        });
      }
      ,
      eventClick: function(info) {
        let bsOffcanvas = new bootstrap.Offcanvas('#offcanvasBeneList');
        bsOffcanvas.show();
        el = info.el;
        bsOffcanvas._element.addEventListener('hidden.bs.offcanvas', function () {
          // Code à exécuter lors de la fermeture de l'Offcanvas
          el.classList.remove('fc-current-open-offcanvas');
        }); 
        // alert('Clicked on: ' + info.dateStr);
        // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
        // alert('Current view: ' + info.view.type);
        // // change the day's background color just for fun
        // info.el.style.backgroundColor = 'red';
        info.el.classList.add("fc-current-open-offcanvas");
       
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


let initTreeView = function() {

	/*
 *   This content is licensed according to the W3C Software License at
 *   https://www.w3.org/Consortium/Legal/2015/copyright-software-and-document
 *
 *   File:   Treeitem.js
 *
 *   Desc:   Setup click events for Tree widget examples
 */

    var treeitems = document.querySelectorAll('[role="treeitem"]');
  
    for (var i = 0; i < treeitems.length; i++) {
      treeitems[i].addEventListener('click', function (event) {
        var treeitem = event.currentTarget;
        var label = treeitem.getAttribute('aria-label');
        if (!label) {
          var child = treeitem.firstElementChild;
          label = child ? child.innerText : treeitem.innerText;
        }
        
      document.getElementById('last_action').value = label.trim();
  
        event.stopPropagation();
        event.preventDefault();
      });
    }


}

// Global callback for ajax

let globalJs = function () {
  setContentAjax();
  if($('#calendar').length){
    setCalendar();
  }
  initTreeView();
};


// init

setContentAjax();
