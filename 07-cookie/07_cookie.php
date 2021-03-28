<!doctype html>
<?php


require_once '../inc/functions.php';
//2- vérification de l'url ou si l'internaute vient pour la 1ère fois ou si on a déja une langue dans la cookie

if(isset($_GET['langue'])){// si une langue est passée dans l'url, l'internquté a cliqué sur des liens, on enverra cette langue dans la cookie
    $langue = $_GET['langue'];
    jeprint_r($langue);
    //jevardump($langue);
}elseif (isset($_COOKIE['langue'])) {
    $langue = $_COOKIE['langue'];
    jeprint_r($langue);
}else {//sinon si l'internaute n'a pas choisi de langue 
    $langue = "fr";
    jeprint_r($langue);
}

// 3 envoie du cookie avec l'information sur la langue
print_r(time());
$expiration = time() + 365*24*60*60;// je crée ici la date d'expiration
//jeprint_r($expiration);
//jeprint_r($expiration - time());
// setcookie(); fonction qui fabrique le cookie

setcookie('langue', $langue, $expiration);// la fonction envie un cookie appelé "langue" avec la valeur $langue et pour date d'expiration la valeur de $expiration

// il n'existe pas de fonction prédéfinie qui permette de supprimez un cookie, pour rendre un cookie invalide on utilise setcookie() avec le nom concerné et en mettant une date d'experitation à 0 ou entérieur...

// Firefox > inspecter > stockage
// Chrome > inspect> Application > stockage



?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <title>Cours PHP 7 - La méthode GET</title>

  </head>
  <body>

    
    <!-- ============= NAV ============ -->
    <div class="container jumbotron">
        <h1 class="display-4">Cours PHP 7 - COOKIE</h1>
        <p class="lead">La super globale $_COOKIE : un cookie est un petit fichier de 4ko maxi déposé par le serveur web sur le poste de l'internaute et qui contient des informations.</p>
        <hr class="my-4">
    </div>
    <!-- ============= Conteu principl ============ -->
    <main class="container">
        <div class="row">
            <div class="col-sm-12">
                <p>Les cookies sont automatiquement renvoyés au serveur web par le navigateur, lorsque l'internaute navigue dans les pages concernées par le ou les cookies, PHP permet de récupéré les données contenues dans un cookie ; car les informations sont stockées dans une supergloba <pre>$_COOKIE</pre></p>
                <p class="alert alert-danger">Un cookie étant sauvegardé sur le poste de l'internaute, il peut être modifié détourné ou volé !!!! On n'y met donc aucune information sensible : ref. bancaire, numéro secu panier etc...</p>
                <!-- 1/ on envoie la langue choisie par l'url ; la valeur ""fr " par ex. est récupérée dans la superglobale  $_GET-->

                
                <a href="?langue=fr" class="btn btn-secondary">Français</a>
                <a href="?langue=es" class="btn btn-danger">Espagnol</a>
                <a href="?langue=it" class="btn btn-warning">Italien</a>
                <a href="?langue=ru" class="btn btn-primary">Russe</a>
                <?php 
                    echo "<h3>langue du site .$langue.</h3>";
                
                    echo time(). "la date du jour, ou le timestamp, exprimée en secondes depuis le 1er janvier 1970 "

                
                
                ?>

    


            </div><!-- /col -->
        </div><!-- /row -->

    

    </main>
    <!-- script bootstrap/popper/jquery dependencies -->
    <script src="jquery/jquery-3.5.1.js"></script>
    <script src="jquery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <?php

        require_once '../inc/footer.inc.php';


    ?>
</body>
</html>

