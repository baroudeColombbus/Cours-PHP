
<?php
require_once '../inc/functions.php';

// connection à la base de données

$pdoDIAL = new PDO('mysql:host=localhost;dbname=dialogue', //on a en premier lieu le driver mysql (IBM, ORACLE, OBC ...), le no du serveur, le nom de la BDD
'root', // l'utilisa pour la BDD
'', //si vous êtes sur MAC il y un mdp = 'root
array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, //cette ligne sert à afficher les erreurs SQL dans le navigateur
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //pour définir le charset des échanges avec la BDD

));

// traitement du formulaire & insertion dans la BDD
// ce formulaire n'est pas assez protégé contre les injections  de type SQL !!! >>>; DELETE FROM commentaire; (cette phrase peut supprimer toutes les données de la table)
// if (!empty($_POST)) {

//     $requete = $pdoDIAL->query( "INSERT INTO commentaire (pseudo, date_enregistrement, message) VALUES ('$_POST[pseudo]', NOW(), '$_POST[message]')" );
//     //now() renvoie la date d'aujourd'hui ATTENTION dans l'exemple l'ordre "mélangé" des indices facilites l'injection SQL
// }


if (!empty($_POST)) {
    // pour se prémunir des failles nous faisons ceci
    $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
    $_POST['message'] = htmlspecialchars($_POST['message']);

    $requete = $pdoDIAL->prepare( "INSERT INTO commentaire (pseudo, date_enregistrement, message) VALUES (:pseudo, NOW(), :message)" );
    
    $requete->execute( array(
        ':pseudo'=> $_POST['pseudo'],
        ':message'=> $_POST['message'],
    ) );
    
}// fin du if (!empty($_POST))
// le fait de mettre des marqueurs dans la requête permet de ne pas concaténer les instructions SQL d'origine et celles qui seraient injectées. Ainsi, elles ne peuvent pas exécuter successivement. De plus, en liant les marqueurs à leur valeur dans l'execute(), PDO les neu

//jevardump($_POST);



?>

<!doctype html>

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
    
    <title>Cours PHP 7 - Introduction</title>
</head>
<body>
<?php require '../inc/navbar.inc.php'; ?>

    <!-- ============= NAV ============ -->
<div class="container jumbotron">
    <h1 class="display-4">Cours PHP 7 - Dialogue</h1>
    <p class="lead">Les boucles permettent de répéter des opérations élémentaires un grand nombre de fois sans avoir à réécrire le même code.</p>
    <hr class="my-4">
</div>
    <!-- ============= Conteu principl ============ -->
    <main class="container">
        <div class="row">
        <div class="col-md-6">
            <p>Création d'une BDD "dialogue" avec les informations suivante</p>
            <ul>
                <li>Nom de la BDD : dialogue</li>
                <li>Nom de la table : commentaire</li>
                <li>la table contient les champs suivant :</li> 
                <li>Champs : id_commentaire INT PK AI</li>
                <li>Pseudo : VARCHAR(20)</li>
                <li>message : TEXT</li>
                <li>date_enregistrement : DATETIME</li>
            </ul>
        </div><!-- /col -->
        </div><!-- /row -->
        <div class="col-md-6">
            
            <?php



jevardump($pdoDIAL); //l'objet est vide car il n'y a pas de propriéités
jevardump(get_class_methods ($pdoDIAL)); //permet d'afficher la liste des méthodes présentes dans l'objet PDO

$requete_cmt = $pdoDIAL->query( "SELECT * FROM commentaire");

jevardump($requete_cmt);
//$commentaire =  $requete_cmt->rowCount();

//2- dans cet objet $requete_cmt nous ne voyons pas encore les doonées concenant amandine. Pourtantelles s'y trouvent.Pour y accéder nous devon sutiliser une méthode de $requete_cmt qui s'appelle fetch() 

//$ligne = $requete_cmt->fetch( PDO ::FETCH_ASSOC );
//3- avec cette méthode fetch() on transforme l'object $requete
//4- fectch(), avec le paramétre PDO:: FETCH_ASSOS permet de transformer l'objet $requete en un array associatif appelé ici $ligne : on y trouve en indice le nom des champs de la réquêtes SQL
// jeVarDump($ligne);

echo "<hr>";
echo "<table class=\"table table-bordered  table-striped \">";
echo "<thead class=\"bg-warning text-center\">";
echo "<tr>";
echo "<th scope=\"col\">ID</th>";
echo "<th scope=\"col\">Pseudo</th>";
echo "<th scope=\"col\">Message</th>";
echo "<th scope=\"col\">Date_enregistrement</th>";
echo "</tr>";
echo  "</thead>";

//while statement
while (  $commentaire = $requete_cmt->fetch( PDO::FETCH_ASSOC ) ) {
        echo "<tr>";
        echo "<td>" .$commentaire['id_commentaire']. "</td>";

        echo "<td>" .$commentaire['pseudo']. "</td>";
        echo "<td>" .$commentaire['message']. "</td>";
        echo "<td>" .$commentaire['date_enregistrement']. "</td>";
        echo "</tr>";
    }

?>
            

    </div><!-- /col -->
    

    <div class="col-sm-12">
    <?php 
            // Affichage des commentaires avec query et boucle while et compter les enregistrements de la table
            $resultat = $pdoDIAL->query( " SELECT * FROM commentaire " );
                 ?> 
            <h5>Il y a <?php echo $nbr_commentaires;// je compte les résultats ?> commentaires</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pseudo</th>
                        <th>Message</th>
                        <th>Date d'enregistrement</th>
                    </tr>
                </thead>
            <?php 
            while ( $commentaire = $resultat->fetch( PDO::FETCH_ASSOC ) ) { ?>
                <tr>
                    <td><?php echo $commentaire['id_commentaire']; ?></td>
                    <td><?php echo $commentaire['pseudo']; ?></td>
                    <td><?php echo $commentaire['message']; ?></td>
                    <td><?php echo $commentaire['date_enregistrement']; ?></td>
                </tr>
            <?php } ?> 
            </table> // jeprint_r($resultat->rowCount());
            $nbr_commentaires = $resultat->rowCount();// je compte les résultats et je passe le total dans une nouvelle variable
    
    </div><!-- /col -->
</div><!-- /row -->

<div class="row">
        <div class="col-sm-12 col-md-6 ">    
        <!-- il faut faire un formulaire HTML avec une action et method ; action reste vide si nous insérons grâce à cette même page et POST va envoyer les infos dans la superglobale $_POST -->
            <form action="" method="POST" class="">
                    <div class="form-group">
                    <!-- input text -->
                        <label for="pseudo">Pseudo</label>
                        <input type="text" name="pseudo" class="form-control" id="pseudo" value="">
                    </div>
                    <!-- textarea -->
                    <div class="form-group">
                        <label for="message">message</label>
                        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>

        </div><!-- / col-->
</div><!-- /row -->



    
</main>
<!-- script bootstrap/popper/jquery dependencies -->
<script src="jquery/jquery-3.5.1.js"></script>
<script src="jquery/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!-- gooter -->
<?php


    ?>
</body>
</html>

