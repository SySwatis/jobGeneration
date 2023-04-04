let ajaxInner = function (ajaxUrl, innerEl) {
  $.ajax({
    url: "html/" + ajaxUrl + ".html",
    method: "GET",
    dataType: "html",
  })
    .done(function (response) {
      $(innerEl).html(response);
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

// Set content by link

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
