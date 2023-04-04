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

	let setModalSize = function (mSize, fullScreen) {
		let myModalEl = document.getElementById("myModal");
		let myModalElInner = document.getElementById('modalDialog');
		console.log(myModalElInner);
		myModalEl.classList.remove("modal-sm");
		myModalEl.classList.remove("modal-lg");
		myModalEl.classList.remove("modal-xl");
		myModalElInner.classList.remove('modal-fullscreen');

		if (fullScreen)
			myModalElInner.classList.add('modal-fullscreen');
		myModalElInner.classList.add(mSize);
		myModalEl.classList.add(mSize);
	};

	let buttonModal = document.getElementById("myModal");

	buttonModal.addEventListener("show.bs.modal", function (event) {
		// // Button that triggered the modal
		let button = event.relatedTarget;
		// // Extract info from data-bs-* attributes
		let filePath = button.getAttribute("data-bs-filepath");
		let mSizeAttr = button.getAttribute("data-bs-msize");
		let fullScreenAttr = button.getAttribute("data-bs-fullscreen");


		let fullScreen = typeof fullScreenAttr !== "undefined" && fullScreenAttr == 1 ? true : false;
		let mSize = typeof mSizeAttr !== "undefined" && mSizeAttr !== "" ? mSizeAttr : '';

		setModalSize(mSize, fullScreen);

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

	function xajax_affiche_info() {

		// Open if not
		let myModal = new bootstrap.Modal(document.getElementById('myModal'), {
			//keyboard: false
		})
		myModal.show();
		setModalSize('modal-lg', 1);
		let ajaxUrl = "modal/beneficiaires/edit";
		new ajaxInner(ajaxUrl, "#myModalContent");

	}


</script>