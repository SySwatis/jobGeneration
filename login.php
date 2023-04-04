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
            </p>
            <form id="loginForm" class="m-t" role="form" action="index.php">
                <div class="form-group mb-3">
                    <input type="text" class="form-control" placeholder="Identifiant" required>
                </div>
                <div class="form-group mb-3">
                    <input type="password" class="form-control" placeholder="Mot de passe" required>
                </div>
                <button type="submit" class="btn btn-success block full-width m-b">Se connecter</button>
              
            </form>
            <a href="#a-propos" class="text-muted"><small>A propos</small></a>
             | <a href="#contact" data-bs-toggle="modal" data-bs-target="#myModal" data-bs-filepath="login/contact" class="text-muted"><small>Un problème de connexion ?</small></a>
        </div>
    </div>
</div>

<?php include_once('inc/bottom-script.php') ?>

<?php include_once('inc/mymodal.php') ?>
</body>

</html>
