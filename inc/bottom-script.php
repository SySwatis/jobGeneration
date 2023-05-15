<!-- Mainly scripts -->
<script src="js/plugins/popper/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/main.js?<?php echo date('Y-m-d H:i:s');?>"></script>
<script src="js/ajax.js?<?php echo date('Y-m-d H:i:s');?>"></script>