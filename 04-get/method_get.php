<!doctype html>
<?php
require_once '../inc/functions.php';

?>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <title>Cours PHP 7 - La méthode GET</title>

  </head>
  <body>



    <!-- ============= NAV ============ -->
    <div class="container jumbotron">
        <h1 class="display-4">Cours PHP 7 - La méthode $_GET</h1>
        <p class="lead"><span class="text-danger">$_GET[ ]</span> représente les données qui transitent par l'url </p>
        <hr class="my-4">
    </div>
    <!-- ============= Conteu principl ============ -->
    <main class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
        <h2>$_GET[ ]</h2>
        <p>Il s'agit d'une superglobale et comme toutes les superglobales, c'est un tableau</p>
        <p>superglobale signifie que cette variable est disponible partout dans le script, y compris au sein des fonctions</p>
        <p>Les informations transitent dans l'url selon la syntaxe suivante <code>mapage.php?indice1=valeur1&indiceN=valeurN</code></p>
        <p>Et enfin quand on récupère les données, $_GET[] se remplit selon le schéma : <pre>$_GET = array('indice1' => 'valeur1', 'indiceN'=> 'valeurN');</pre></p>
        </div><!-- /col -->
        <div class="col-sm-12 col-md-6">
        <!-- à partir du ? on envoie des informations via l'url à la page 02_method_get.php et elles sont receptionnées par la superglobales -->
            <a href="02_method_get.php?article=jean&couleur=blue&prix=24">jean blue</a>
            <a href="02_method_get.php?article=robe&couleur=vert&prix=40">robe verte</a>
            <a href="02_method_get.php?article=cardigan&couleur=noir&prix=145">cardigan noir</a>
            <a href="02_method_get.php?">erreur</a>
        </div><!-- /col -->
    </div><!-- /row -->

    

    </main>
    <!-- script bootstrap/popper/jquery dependencies -->
       <!-- script bootstrap/popper/jquery dependencies -->
   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="jquery/jquery-3.5.1.js"></script>
    <script src="jquery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


        require_once '../inc/footer.inc.php';


    ?>
</body>
</html>

