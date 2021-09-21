<?php require_once '../inc/functions.php';?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Cours PHP 7 - PDO</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <!-- navigation en include -->
    <?php require '../inc/navbar.inc.php'; ?>
    <!-- ============= NAV ============ -->
    <div class="container-md jumbotron">
        <h1 class="display-4">Cours PHP 7 - PDO</h1>
        <p class="lead">La variable "$pdo" est un objet qui représente la connexion à une BDD</p> 
        <hr class="my-4">
    </div>

    <!-- ============= Contenu principal ============ -->

    <main class="container-md">
        <div class="row">
            <div class="col-sm-12">
            <?php
                    $requete = $pdoENT->query("SELECT * FROM employes");
                    $nbr_employes = $requete->rowCount();

                    echo "<table class=\"table table-bordered \">";
                    echo "<thead class=\"thead-dark\">";

                    echo "<tr>";
                    echo "<th scope=\"col\">Id</th>";
                    echo "<th scope=\"col\">Nom</th>";
                    echo "<th scope=\"col\">Prénom</th>";
                    echo "<th scope=\"col\">Sexe</th>";
                    echo "<th scope=\"col\">Service</th>";
                    echo "<th scope=\"col\">Date d'embauche</th>";
                    echo "<th scope=\"col\">Salaire</th>";
                    echo "</tr>";
                    echo "</thead>";

                             
                    while ($ligne = $requete->fetch(PDO ::FETCH_ASSOC)) {                        
                        echo "<tr>";
                        echo "<td>". $ligne['id_employes']. "</td>";
                        //condition
                        echo "<td>";
                        if($ligne['sexe'] == 'f') {
                            echo "Mme ";
                        }else {
                            echo "M. ";
                        }
                        echo $ligne['prenom']. "</td>";
                        //fin condition
                        echo "<td>" .$ligne['prenom']. "</td>";
                        echo "<td>" .$ligne['sexe']. "</td>";
                        echo "<td>" .$ligne['service']. "</td>";
                        echo "<td>" .$ligne['date_embauche']. "</td>";
                        echo "<td>" .$ligne['salaire']. " €" ."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";?>

            </div>
        </div>

        <!-- fin row -->
    </main>
    <!-- fin container -->

    <?php require '../inc/footer.inc.php'; ?>
       <!-- script bootstrap/popper/jquery dependencies -->
   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="jquery/jquery-3.5.1.js"></script>
    <script src="jquery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
