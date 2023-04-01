<!DOCTYPE html>
<html>
<?php include_once('inc/head.php'); ?>
<body class="fixed-sidebar-sticky"  style="background-image:url('img/AdobeStock_526910736_Preview.webp');background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">
<?php include_once('inc/top-navbar.php') ?>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side overflow-auto" role="navigation">
        <div class="sidebar-collapse">
            <?php include_once('inc/menu.php') ?>
        </div>
    </nav>
    <div id="page-wrapper">
        <div id="content" class="wrapper wrapper-content">    
            <?php include_once('inc/dashboard.php') ?>
        </div>
        <?php include_once('inc/footer.php') ?>
    </div>
</div>

<?php include_once('inc/bottom-script.php') ?>

<?php include_once('inc/mymodal.php') ?>
</body>
</html>
