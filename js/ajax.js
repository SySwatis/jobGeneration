let ajaxInner = function (ajaxUrl, innerEl) {
  $.ajax({
    url: "html/" + ajaxUrl + ".html",
    method: "GET",
    dataType: "html",
  })
    .done(function (response) {
      $(innerEl).html(response);
      new globalJs();
    })

    .fail(function (error) {
      // ...
    })
    .always(function () {
      console.log("AjaxInner request success");
      // Restart pace loader spinner
      Pace.restart();
    });
};


// Set content default 

new ajaxInner('page/dashboard', "#content");

