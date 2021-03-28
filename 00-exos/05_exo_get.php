<!doctype html>
<?php
require_once '../inc/functions.php';

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
    <?php
        require_once '../inc/navbar.inc.php';
    ?>
    <!-- ============= NAV ============ -->
    <div class="container jumbotron">
        <h1 class="display-4">Cours PHP 7 - Exo $_GET</h1>
        <?php
        jevardump($_GET);
        if(isset($_GET['action']) && $_GET['action']== 'modification');
        echo "<p class=\" alert alert-warning\">Vous modifier votre compte</p>";
        
        ?>
        <hr class="my-4">
    </div>
    <!-- ============= Conteu principl ============ -->
    <main class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>MINI exo</h3>
                <ul>
                    <li>1/ affichez dans cette page un titre "Mon compte : un nom et un prénom</li>
                    <li>2/ vous y ajouter un lien "modifier mon compte" : Ce lien renvoie dans l'url à la même page, donc à cette page, l'action demandé est "modification", quand on clique sur le lien</li>
                    <li> 3/ Si vous avez reçu cette action "modification" par l'url, alors vous affichez "Vous avez demandé la modification de votre compte</li>
                </ul>
            </div><!-- /col -->
        </div><!-- /row -->

        <div class="row">
        <div class="col-md-6 ">
                <a href="05_exo_get.php?action=modification">Modifier mon compte </a>
                <?php
                    // vérification de ce que je récupère en $_GET 1/ l'indice ET 2/ son contenu
                    // jevar_dump($_GET);
                    if ( isset($_GET['action']) && $_GET['action'] == 'modification') {// && indice ET contenu
                        echo "<p class=\"lead alert alert-warning\">Vous modifiez votre compte</p>";
                    }
                ?>
        </div>
            <div class="col-md-6">
                <h2>Supression en utilisant $_GET['action']</h2>
        
            <a href="05_exo_get.php?action=suppression">Supprimer mon compte </a>
            <?php
                    // jevar_dump($_GET);
                    if ( isset($_GET['action']) && $_GET['action'] == 'suppression') {
                        echo "<p class=\"lead alert alert-danger\">Vous supprimez votre compte</p>";
                    }
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

