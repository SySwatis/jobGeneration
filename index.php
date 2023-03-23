<!DOCTYPE html>
<html>

<?php include_once('inc/head.php'); ?>

<body class="fixed-sidebar-sticky"  style="background-image:url('img/AdobeStock_526910736_Preview.webp');background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">
<?php include_once('inc/top-navbar.php') ?>


<span  data-bs-toggle="modal" data-bs-target="#fileBenModal" onclick="xajax_affiche_info('595947')">
									<button type="button" class="btn btn-success btn-xs me-1"><i
											class="fa fa-eye"></i></button>
									<b>ANDRE NATHALIE</b>
								</span>

<div id="wrapper">

    <nav class="navbar-default navbar-static-side overflow-auto" role="navigation">
        <div class="sidebar-collapse">
            <?php include_once('inc/menu.php') ?>
        </div>
    </nav>

    <div id="page-wrapper">
        

        <div class="wrapper wrapper-content">    
            <?php include_once('inc/dashboard.php') ?>
        </div>
        
        <?php include_once('inc/footer.php') ?>

    </div>
</div>
<?php include_once('inc/modal/search.php') ?>
<?php include_once('inc/modal/beneficiaires/search.php') ?>
<?php include_once('inc/modal/beneficiaires/list.php.html') ?>
<?php include_once('inc/modal/beneficiaires/file.php.html') ?>
<?php include_once('inc/bottom-script.php') ?>


</body>

</html>
