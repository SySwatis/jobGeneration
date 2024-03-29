// main.js

// Scrolling vertical
// param : cible de l'élément, rajoute l'ancre dans l'url

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

// Login
// la fonction scrollTo est utilisé pour le mobile
// pour placer l'utilisateur au niveau du formulaire 
// et mettre en vu le bouton "se connecter"

$("#loginForm input").on("click", function (e) {
  e.preventDefault();
  scrollToElement("#loginForm", false);
});

// Ajax content by link
// Injecte le contenu (ajax) en fonction du lien de l'attribut href
// La classe no-ajax associé à la balise "a" désactive cette fonctionnalité

setContentAjax = function () {
  $("a").on("click", function (event) {
    if ($(this).attr("href") === "#" || $(this).hasClass("no-ajax")) {
      return;
    } else {
      event.preventDefault();
      $("#myModal").modal("hide");
      ajaxUrl = $(this).attr("href");

      // Demo alert
      // Affiche un message selon la page ou le contexte (success, error) au dessus du header
      if (ajaxUrl === "page/dashboard") {
        new ajaxInner("alert/warning", "#alert");
      }
      if (ajaxUrl === "page/list-beneficiaires") {
        new ajaxInner("alert/beneficiaires", "#alert");
      }
      if (ajaxUrl === "page/agenda") {
        new ajaxInner("alert/success", "#alert");
      }

      new ajaxInner(ajaxUrl, "#content");
    }
    return;
  });
};

// Full Calendar
// Boostrap : voir la section themeSystem & buttonIcons

let setCalendar = function () {
  let calendarEl = document.getElementById("calendar");
  if (calendarEl !== null) {
    let calendar = new FullCalendar.Calendar(calendarEl, {
      schedulerLicenseKey: "CC-Attribution-NonCommercial-NoDerivatives",
      timeZone: "UTC",
      // dayMaxEvents: true, // allow "more" link when too many events
      locale: "fr",
      themeSystem: "bootstrap5",
      buttonIcons: {
        prev: "dsb fa fa-chevron-left",
        next: "dsb fa fa-chevron-right",
        prevYear: "chevrons-left", // double chevron
        nextYear: "chevrons-right", // double chevron
      },
      eventDidMount: function (info) {
        let eventElement = info.el;
        let eventTitle = info.event.title;
        let eventDescription = info.event.extendedProps.description;

        eventElement.setAttribute("data-bs-toggle", "tooltip");
        eventElement.setAttribute("data-bs-placement", "top");
        eventElement.setAttribute(
          "title",
          "<h3>" + eventTitle + "</h3>" + eventDescription
        );
        eventElement.setAttribute("data-bs-html", "true");

        // Initialise le tooltip Bootstrap avec une classe personnalisée
        // Ajoute les toolstip
        let tooltip = new bootstrap.Tooltip(eventElement, {
          template:
            '<div class="tooltip fullcalendar-tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
        });

        // Activation du tooltip lors du survol de la souris
        eventElement.addEventListener("mouseenter", function () {
          tooltip.show();
        });

        // Désactivation du tooltip lorsque la souris quitte l'événement
        eventElement.addEventListener("mouseleave", function () {
          tooltip.hide();
        });
      },
      eventClick: function (info) {
        let bsOffcanvas = new bootstrap.Offcanvas("#offcanvasBeneList");
        bsOffcanvas.show();
        el = info.el;
        bsOffcanvas._element.addEventListener(
          "hidden.bs.offcanvas",
          function () {
            // Code à exécuter lors de la fermeture de l'Offcanvas
            el.classList.remove("fc-current-open-offcanvas");
          }
        );
        // alert('Clicked on: ' + info.dateStr);
        // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
        // alert('Current view: ' + info.view.type);
        // // change the day's background color just for fun
        // info.el.style.backgroundColor = 'red';
        info.el.classList.add("fc-current-open-offcanvas");
      },
      headerToolbar: {
        left: "prev,next",
        center: "title",
        right:
          "resourceTimelineDay,resourceTimelineSevenDay,resourceTimelineMonth",
      },
      buttonText: {
        day: "Jour",
      },
      initialView: "resourceTimelineDay",
      scrollTime: "07:00",
      aspectRatio: 1.5,
      views: {
        // resourceTimelineDay: {
        //   buttonText: ':15 slots',
        //   slotDuration: '00:15'
        // },
        resourceTimelineSevenDay: {
          type: "resourceTimeline",
          duration: { days: 7 },
          buttonText: "Semaine",
        },
        resourceTimelineMonth: {
          buttonText: "Mois",
        },
      },
      editable: true,
      resourceAreaHeaderContent: "Villes",
      resources:
        "https://fullcalendar.io/api/demo-feeds/resources.json?with-nesting&with-colors",
      events:
        "https://fullcalendar.io/api/demo-feeds/events.json?single-day&for-resource-timeline",
    });

    calendar.render();
  }
};

// Tree View (w3c, aria)
// Arborescence des fichiers pour la page document (file directory)
//
// Méthode pour instancier, le conteneur (tree) et les items (treeitem)
// l'action permet de cibler le fichier cliqué et d'en afficher le nom.
//
// Cette fonction est employée lors du callBack ajax
// js/tree.js et js/treeitem.js contiennent ces intances
// Démo & doc ici : https://www.w3.org/WAI/ARIA/apg/patterns/treeview/examples/treeview-1b/

let initTreeView = function () {

  let ajaxTree = document.querySelectorAll('[role="tree"]');

  let ajaxTreeitem = document.querySelectorAll('[role="treeitem"]');

  if (ajaxTreeitem.length && ajaxTree.length) {
    
    for (let i = 0; i < ajaxTree.length; i++) {
      at = new Tree(ajaxTree[i]);
      at.init();
     
    }

    for (let i = 0; i < ajaxTreeitem.length; i++) {
      let ati = new Treeitem(ajaxTreeitem[i],ajaxTree);
      ati.init();
    }

    for (let i = 0; i < ajaxTreeitem.length; i++) {
      ajaxTreeitem[i].addEventListener("click", (event) => {
        let treeitem = event.currentTarget;
        let label = treeitem.getAttribute("aria-label");
        if (!label) {
          let child = treeitem.firstElementChild;
          label = child ? child.innerText : treeitem.innerText;
        }

        document.getElementById("last_action").value = label.trim();

        event.stopPropagation();
        event.preventDefault();
      });
    }
  }
};

// Global callback for ajax
// Instance les plugins et/ou fonctionnalités dans le callBack ajax
// une fois le contenu injecté

let globalJs = function () {

  setContentAjax();

  if ($("#calendar").length) {
    setCalendar();
  }

  initTreeView();

};

// init

setContentAjax();
