<!DOCTYPE html>
<html>

<?php include_once('inc/head.php'); ?>

<body>

<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <?php include_once('inc/menu.php') ?>
        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg"   style="background-image:url('img/AdobeStock_526910736_Preview.webp');background-repeat:no-repeat;background-size:cover;">
        
        <?php include_once('inc/top-navbar.php') ?>

        <div class="wrapper wrapper-content animated fadeInRight">    
            <?php include_once('inc/dashboard.php') ?>
        </div>
        
        <?php include_once('inc/footer.php') ?>

    </div>
</div>
<?php include_once('inc/modal/search.php') ?>
<?php include_once('inc/bottom-script.php') ?>


</body>

</html>
