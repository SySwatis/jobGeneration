function ajaxInner(ajaxUrl,innerEl) {

  $.ajax({
    //L'URL de la requête
    url: "html/" + ajaxUrl + ".html",

    //La méthode d'envoi (type de requête)
    method: "GET",

    //Le format de réponse attendu
    dataType: "html",
  })
    //Ce code sera exécuté en cas de succès - La réponse du serveur est passée à done()
    /*On peut par exemple convertir cette réponse en chaine JSON et insérer
     * cette chaine dans un div id="res"*/
    .done(function (response) {
      $(innerEl).html(response);
    })

    //Ce code sera exécuté en cas d'échec - L'erreur est passée à fail()
    //On peut afficher les informations relatives à la requête et à l'erreur
    .fail(function (error) {
      // alert("La requête s'est terminée en échec. Infos : " + JSON.stringify(error));
    })

    //Ce code sera exécuté que la requête soit un succès ou un échec
    .always(function () {
      console.log("Requête effectuée");
      // Restart pace loader spinner
      Pace.restart();
    });
}

// demo

// ajaxInner('fiche-beneficiaire','#content'); 

