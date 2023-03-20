<!DOCTYPE html>
<html>

<?php include_once('inc/head.php'); ?>

<body class="page-login">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div class="animate__animated animate__fadeIn">
                <h1 class="logo-name mt-0">
                    <img width="145px"
                    src="img/logo-small-white-145px.png"
                    alt="Job Generation">
                </h1>
                <h2 class="text-white mt-1 mb-4">Bienvenue sur notre plateforme</h2>
            </div>
                <p class="text-muted text-left small">Utilisez vos identifiants habituels
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <form class="m-t" role="form" action="index.php">
                <div class="form-group mb-3">
                    <input type="text" class="form-control" placeholder="Login" required>
                </div>
                <div class="form-group mb-3">
                    <input type="password" class="form-control" placeholder="Mot de passe" required>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Connexion</button>
              
            </form>
            <a href="#a-propos" class="text-muted"><small>A propos</small></a>

            <p class="text-white text-center mt-2 mb-0"><small>Un problème de connection ?</small></p>
            <a href="#contact" class="text-muted"><small>Contact</small></a>
        </div>
    </div>
</div>
<?php include_once('inc/modal/search.php') ?>
<?php include_once('inc/bottom-script.php') ?>


</body>

</html>
