<?php require_once '../inc/functions.php';?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Cours PHP 7 - Exo avec $_GET</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <!-- navigation en include -->
    <?php require '../inc/navbar.inc.php'; ?>
    <!-- ============= NAV ============ -->
    <div class="container-md jumbotron">
        <h1 class="display-4">Votre compte - mise à jour ou supperssion</h1>
        <p class="lead"></p> 
        <hr class="my-4">
    </div>

    <!-- ============= Contenu principal ============ -->

    <!--     MINI exo -->
        <!--     1/ affichez dans cette page un titre "Mon compte : un nom et un prénom"-->
        <!--     2/ vous y ajouter un lien "modifier mon compte" : Ce lien renvoie dans l'url à la même page, donc à cette page, l'action demandé est "modification", quand on clique sur le lien -->
        <!--     3/ Si vous avez reçu cette action "modification" par l'url, alors vous affichez "Vous avez demandé la modification de votre compte" -->

    <main class="container-md">
        <div class="row">
            <div class="col-md-5">
                <h2>Mon compte : Divine Hope</h2>
                <a href="05_exo_get.php?action=modification">modifier mon compte</a>

            </div><!-- /col -->
            <div class="col-md-3">

            </div><!-- /col -->
            <div class="col-md-4">

            </div><!-- /col -->
        
        </div><!-- /row -->
    </main>
    <!-- fin container -->

    <?php require '../inc/footer.inc.php'; ?>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>