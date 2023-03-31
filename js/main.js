(function ($) {

  // functions

  function scrollToElement(targetEl, windowHash) {
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

    // Modal (global)

	let setModalSize = function(s) {
		
		let myModalEl =  document.getElementById("myModal");
        myModalEl.classList.remove("modal-sm");
        myModalEl.classList.remove("modal-lg");
        myModalEl.classList.remove("modal-xl");
		myModalEl.classList.add(s);

	}

	let buttonModal = document.getElementById('myModal');
		buttonModal.addEventListener('show.bs.modal', function (event) {
		// // Button that triggered the modal
		let button = event.relatedTarget;
		// // Extract info from data-bs-* attributes
		let filePath = button.getAttribute('data-bs-filepath');
		let mSize = button.getAttribute('data-bs-msize');
		if(typeof mSize !=='undefined' && mSize!=='')
		setModalSize(mSize);
		let ajaxUrl = 'modal/'+filePath;
		new ajaxInner(ajaxUrl,'#myModalContent');

	})


    showMyModal = function(ajaxUrl,target) {
       
        let myModalEl =  document.getElementById("myModal");

        myModalEl.classList.remove("modal-sm");
        myModalEl.classList.remove("modal-lg");
        myModalEl.classList.remove("modal-xl");

        let modalSize = 'modal-xl';

        let myModal = new bootstrap.Modal(myModalEl, {});

        myModalEl.addEventListener('show.bs.modal', event => {
            // do something...
            myModalEl.classList.add(modalSize);
            new ajaxInner(ajaxUrl,target);
            Pace.restart();
        })
      
        myModal.show();
	}

    // showMyModal('modal/beneficiaires/edit','#myModalContent');

    // Ajax content by link

    $("a").on("click", function (event) {
        if ($(this).attr("href") === "#" || $(this).hasClass("no-ajax")) {
        return;
        } else {
			event.preventDefault();
			ajaxUrl = $(this).attr("href");
			new ajaxInner(ajaxUrl,'#content');
        }
        return;
    });

    // Ajax function by onClick

    function xajax_affiche_info() {
        return;
    }

	

})(jQuery);
