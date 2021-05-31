<?php
require_once 'inc/init.php';
require_once 'inc/functions.php' ;
//1- Vérification de la session : 
//jeprint_r($_SESSION);
// require_once 'inc/header.php';

// empeche la connexion on profil.php
// si l'utilsateur n'est pas connecté
// if(!estConnecte()){
//   header('location:02_connexion.php') ;
// }
// ?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>La Boutique - Votre profil </title>
    <!-- mes styles  -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php require_once 'inc/navbarNew.php'; ?>
    <main class="container bg-white m-4 mx-auto p-4">
    <div class="col-sm-12 col-md-8 col-lg-6 border border-success mx-auto m-4 p-4">
<h1 class="mt-4">Bienvenue  : votre profil</h1>
<h2 class="bg-primary text-white">Bonjour <?php echo $_SESSION['membre']['pseudo']; ?> !</h2>
<!--Pour afficher pseudo il faut aller dans le tableau $_SESSION puis à l'indice ['membre'] puis à l'intérieur à l'indice ['pseudo'] pour accéder à la valeur pseudo, voir le debug jeprint_r plus haut-->
<?php 

// si le statut est 0 affiche utilisateur
// si le statut est 1 affiche administrateur 

if(estAdmin()) {
    echo '<p>Vous êtes un administrateur</p>';
} else {
    echo '<p>Vous êtes un utilisateur</p>';
}
?>
<hr>




    <h3>Informations de profil</h3>
    <p>Email : <?php echo $_SESSION['membre']['email']; ?> </p>
    <p>Adresse : <?php echo $_SESSION['membre']['adresse']; ?> </p>
    <p>Code postal : <?php echo $_SESSION['membre']['code_postal']; ?> </p>
    <p>Ville : <?php echo $_SESSION['membre']['ville']; ?> </p>
      </div>
    </main>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>