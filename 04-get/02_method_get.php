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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <title>Cours PHP 7 - La méthode GET</title>

  </head>
  <body>

    
    <!-- ============= NAV ============ -->
    <div class="container jumbotron">
        <h1 class="display-4">Cours PHP 7 - La méthod $_GET</h1>
        <p class="lead">$_GET[] représente les données qui transitent par l'url </p>
        <hr class="my-4">
    </div>
    <!-- ============= Conteu principl ============ -->
    <main class="container">
    <div class="row">
    <div class="col-sm-12">
              <?php 
                if(isset($_GET['article']) && isset($_GET['couleur']) && isset($_GET['prix'])) { // je fabrique la card si j'ai bien les contenus de mon array $_GET  
                ?>         
            <div class="card" style="width: 18rem;">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_GET['article'];?> 
                    </h5>
                    <p class="card-text">
                        <?php echo $_GET['couleur']. "<br>" .$_GET['prix']. " €"; ?>
                    </p>
                    <a href="panier.php" class="btn btn-primary">Ajouter au panier</a>
                </div>
            </div>
            <!-- fin card      -->
            <?php
                } else { //sinon je fabrique un simple p
                    echo "<p class=\" alert alert-success\">Désolé il n'y a pas de produit correspendant sur cette page !</p>"; 
                } 
                ?> 
            </div>
            <!-- /col -->
    </div><!-- /row -->

    

    </main>
        <!-- script bootstrap/popper/jquery dependencies -->
   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="jquery/jquery-3.5.1.js"></script>
    <script src="jquery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?php

        require_once '../inc/footer.inc.php';
    ?>
</body>
</html>

