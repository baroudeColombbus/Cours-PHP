<!doctype html>
<?php
require_once '../inc/functions.php';

// set langge en français
setlocale(LC_ALL, 'fr_FR.UTF8','fr_FR');
// connection à la base de données

$pdoENT = new PDO('mysql:host=localhost;dbname=entreprise', //on a en premier lieu le driver mysql (IBM, ORACLE, OBC ...), le no du serveur, le nom de la BDD
'root', // l'utilisa pour la BDD
'', //si vous êtes sur MAC il y un mdp = 'root
array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, //cette ligne sert à afficher les erreurs SQL dans le navigateur
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //pour définir le charset des échanges avec la BDD

));





if (!empty($_POST)) {
    //jevardump($_POST);
    // pour se prémunir des failles nous faisons ceci
    $_POST['prenom'] = htmlspecialchars($_POST['prenom']);
    $_POST['nom'] = htmlspecialchars($_POST['nom']);
    $_POST['sexe'] = htmlspecialchars($_POST['sexe']);
    $_POST['service'] = htmlspecialchars($_POST['service']);
    $_POST['date_embauche'] = htmlspecialchars($_POST['date_embauche']);
    $_POST['salaire'] = htmlspecialchars($_POST['salaire']);

    // $requete = $pdoENT->prepare( "INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES (:prenom, :nom, :sexe, :service, NOW(), :salaire)" );

    $requete = $pdoENT->prepare( "INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES (:prenom, :nom, :sexe, :service, :date_embauche, :salaire)" );
    
    $requete->execute( array(
        ':prenom'=> $_POST['prenom'],
        ':nom'=> $_POST['nom'],
        ':sexe'=> $_POST['sexe'],
        ':service'=> $_POST['service'],
        ':date_embauche'=> $_POST['date_embauche'],
        ':salaire'=> $_POST['salaire'],
        
    ) );

    //jevardump($requete);
}

    $requete_empl = $pdoENT->query( "SELECT * FROM employes ");
                // jeprint_r($resultat->rowCount());
    $nbr_employes = $requete_empl->rowCount();
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
    
    <title>Cours PHP 7 - Introduction</title>
</head>
<body>
<?php require '../inc/navbar.inc.php'; ?>

    <!-- ============= NAV ============ -->
<div class="container jumbotron">
    <h1 class="display-4">Cours PHP 7 - employes</h1>
    <p class="lead">insertion des bases de données d'une manière sécurisé</p>
    <hr class="my-4">
</div><!-- /jumbotron -->
    <!-- ============= Conteu principl ============ -->
    <main class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12  mx-auto">    
        <h5 class="text-center text-danger alert alert-success">Il y a au total <b><?php echo $nbr_employes;// je compte les résultats ?></b> employes dans notre BDD  <br>Voulez-vous ajouter un(e) nouvelle employé(e) ?</h5>
        <!-- il faut faire un formulaire HTML avec une action et method ; action reste vide si nous insérons grâce à cette même page et POST va envoyer les infos dans la superglobale $_POST -->
            <form action="" method="POST" class="">
                    <!-- input text -->
                    <div class="form-group border border-secondary rounded bg-info">
                        <div class="form-group col-md-6">
                        <label for="nom" class="text-white" >nom</label>
                            <input type="text" name="nom"  class="form-control" id="nom"  placeholder="votre nom" value="">
                        </div>
                        <div class="form-group col-md-6">
                        <!-- input text -->
                            <label for="prenom" class="text-white">Prénom</label>
                            <input type="text" name="prenom" class="form-control" id="prenom"  placeholder="votre prenom" value="">
                        </div>
                        <!-- service -->
                        <!-- input text -->
                        <div class="form-group col-md-6">
                        <label for="service" class="text-white">Service</label>
                        <select class="form-control"  name="service" id="service" value="">
                            <option value="direction">Direction</option>
                            <option value="commercial">Commercial</option>
                            <option value="production">Production</option>
                            <option value="secretariat">Sécrétariat</option>
                            <option value="comptabilite">Comptabilité</option>
                            <option value="communication">Communication</option>
                            <option value="juridique">Juridique</option>
                            <option value="assistant">Assistant</option>
                            <option value="informatique">Informatique</option>
                        </select>
                        </div>
                        
                        <!-- sexe -->
                        <div class="form-group col-md-2">
                        <label for="sexe" class="text-white">Sexe</label>
                        <select id="sexe" name="sexe" class="form-control">
                            <option selected>Quel sexe? </option>
                            <option value="f">Femme</option>
                            <option value="m">Masculin</option>
                        </select>
                        </div>
                        <!-- date_embauche -->
                        <div class="form-group col-md-3">
                            <label for="date_embauche">date_embauche</label>
                            <input type="date" name="date_embauche"  class="form-control" value="">
                        </div>
                        <!-- salaire -->
                        <div class="form-group col-md-2">
                            <label for="salaire" class="text-white">salaire</label>
                            <input type="text" name="salaire" id="salaire" placeholder="21.000" class="form-control pr-1">
                        </div>
                        <button type="submit" class="btn btn-warning ml-3">Envoyer</button>
                    </div>
            </form>

        </div><!-- / col-->
</div><!-- /row -->
        <div class="row mt-4">
        <div class="col-sm-12 col-md-12">
            <?php

            //jevardump($pdoENT); //l'objet est vide car il n'y a pas de propriéités
            //jevardump(get_class_methods ($pdoDIAL)); //permet d'afficher la liste des méthodes présentes dans l'objet PDO

            $requete_empl = $pdoENT->query( "SELECT * FROM employes ORDER BY nom  ");
            $requete_empl_deux = $pdoENT->query( "SELECT nom, prenom as 'nom,prenom' FROM employes ");

            //jevardump($requete_empl);
            //jevardump($requete_empl_deux);


            $employe =  $requete_empl->rowCount();

            //2- dans cet objet $requete_cmt nous ne voyons pas encore les doonées concenant amandine. Pourtantelles s'y trouvent.Pour y accéder nous devon sutiliser une méthode de $requete_cmt qui s'appelle fetch() 

            // $ligne = $requete_cmt->fetch( PDO ::FETCH_ASSOC );
            // 3- avec cette méthode fetch() on transforme l'object $requete
            // 4- fectch(), avec le paramétre PDO:: FETCH_ASSOS permet de transformer l'objet $requete en un array associatif appelé ici $ligne : on y trouve en indice le nom des champs de la réquêtes SQL
            // jeVarDump($ligne);

            echo "<hr>";
        
            ?>
                    
        </div><!-- /col -->
        <div class="col-sm-12 col-md-12">
            <?php 

            if(isset($_GET['id_employes'])){
                $requete_empl = $pdoENT->query( "SELECT * FROM employes ");
                $requete_empl_deux = $pdoENT->query( "SELECT nom, prenom as 'nom,prenom' FROM employes ");
    
                if($requete_empl == TRUE) {
                    echo '<p class="alert alert-success">Record successfully  added</p>';
                }else {
                    echo "erros " .$requete_empl . "<br>" . $pdoENT->error;
                
                        
                    }
                
                }

            
        

            ?> 
            <table class="table  table-hover">
            <thead class="bg-warning">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Service</th>
                    <th>Date d'entre</th>
                    <th>Salaire</th>
                    <th>Fiche</th>
                </tr>
            </thead>
            <?php 
            while ( $employe = $requete_empl->fetch( PDO::FETCH_ASSOC ) ) { ?>
                <tr>
                    <td><?php echo  $employe['id_employes']; ?></td>
                    <td><?php echo  $employe['nom']; ?></td>
                    <td><?php echo  $employe['prenom']; ?></td>
                    <td><?php echo  $employe['service']; ?></td>
                    <td><?php echo  strftime('%A %e %B %Y', strtotime($employe['date_embauche'])); ?></td>
                    <td><?php echo  $nombre_format_francais = number_format($employe['salaire'], 2, ',', ' ')." €"; ?></td>
                    <td><a href="02_fiche_employes.php?id_employes=<?php echo $employe['id_employes']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"></path>
</svg> voir affiche</a></td>
                    
                </tr>
            <?php } ?> 
        <?php 
             $requete_empl = $pdoENT->query( "SELECT * FROM employes ");
              // jeprint_r($resultat->rowCount());
        $nbr_employes = $requete_empl->rowCount();// je compte les résultats et je passe le total dans une nouvelle variable
        echo  "Il y a en ce moment précis <b>$nbr_employes</b> employés dans la BDD";
         ?> 
        </table> 

        
        
                 
        
        </div>
                        
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

