<?php require_once '../inc/functions.php';?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Cours PHP 7 - La méthode POST</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    
</head>

<body>
    <!-- navigation en include -->
    <?php require '../inc/navbar.inc.php'; ?>
    <!-- ============= NAV ============ -->
    <div class="container-md jumbotron">
        <h1 class="display-4">Exo 03 - La méthode POST</h1>
        <p class="lead"></p> 
        <hr class="my-4">
    </div>

    <!-- ============= Contenu principal ============ -->

    <main class="container-md">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <!-- 
                    // EXO 
                    2- faire un formaulaire avec les champs prénom, nom, email, adresse code postal et ville
                    2- puis récupérer et afficher dans une page 03_form_traitement.php les informations de $_POST
                    3- puis on fabriquera ensemble un fichier. txt pour stocker les information du form
                -->
                <form method="POST" action="03_form_traitement.php" class="p-2">
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" >
                </div>
               
                <div class="form-group">
                    <label for="nom">Nom de famille *</label>
                    <input type="text" class="form-control" name="nom" id="nom" required>
                </div>

                <div class="form-group">
                    <label for="email">Votre email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required> 
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Adresse </label>
                    <input type="text" class="form-control" id="adresse" name="adresse">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Code postal</label>
                    <input type="text" class="form-control" id="codepostal" name="codepostal" maxlength="10">
                </div>

                <div class="form-group">
                    <label for="nom">Ville</label>
                    <input type="text" class="form-control" name="ville" id="ville">
                </div>
                <button type="submit" class="btn btn-small btn-primary">Envoyer</button>
                </form>

            </div>
            <!-- fin col -->
               
            <div class="col-sm-12 col-md-6">
           
            </div>
            <!-- fin col -->
        </div>
        <!-- fin row -->
    </main>
    <!-- fin container -->

    <?php require '../inc/footer.inc.php'; ?>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>