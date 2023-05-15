<div id="myModal" class="my-modal modal" tabindex="-1">
	<div id="modalDialog" class="modal-dialog">
		<div id="myModalContent" class="modal-content inmodal">
			<!-- my modal content -->
		</div>
	</div>
</div>
</div>
<script>

	// Modal (global)

	let setModalSize = function (mSize) {
		
		let myModalEl = document.getElementById("myModal");
		let myModalElInner = document.getElementById('modalDialog');
		
		// Remove sizes
		myModalEl.classList.remove("modal-sm");
		myModalEl.classList.remove("modal-lg");
		myModalEl.classList.remove("modal-xl");
		myModalElInner.classList.remove('modal-fullscreen');

		if (mSize=="modal-fullscreen") {
			myModalElInner.classList.add('modal-fullscreen');
		} else {
			myModalEl.classList.add(mSize);
		}

		
	};

	let buttonModal = document.getElementById("myModal");

	buttonModal.addEventListener("show.bs.modal", function (event) {
		// // Button that triggered the modal
		let button = event.relatedTarget;
		// // Extract info from data-bs-* attributes
		let filePath = button.getAttribute("data-bs-filepath");
		let mSizeAttr = button.getAttribute("data-bs-msize");

		let mSize = typeof mSizeAttr !== "undefined" && mSizeAttr !== "" ? mSizeAttr : '';

		setModalSize(mSize);

		let ajaxUrl = "modal/" + filePath;
		new ajaxInner(ajaxUrl, "#myModalContent");

	});

	showMyModal = function (ajaxUrl, target) {

		let myModalEl = document.getElementById("myModal");

		myModalEl.classList.remove("modal-sm");
		myModalEl.classList.remove("modal-lg");
		myModalEl.classList.remove("modal-xl");

		let modalSize = "modal-xl";

		let myModal = new bootstrap.Modal(myModalEl, {});

		myModalEl.addEventListener("show.bs.modal", (event) => {
			// do something...
			myModalEl.classList.add(modalSize);
			new ajaxInner(ajaxUrl, target);
			Pace.restart();
		});

		myModal.show();
	};

	// Ajax function by onClick

	function xajax_affiche_info(id) {
		$('#myModal').modal('hide');
		let ajaxUrl = "fiche-beneficiaire";
		new ajaxInner(ajaxUrl, "#content");

	}


</script>