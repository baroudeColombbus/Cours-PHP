
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



// traitement des infos reçu par $_GET

//jeprint_r($_GET);

if (isset  ($_GET['id_employes'])){// si existe l'indice "id_employes" dans $_GET, donc dans l'url, c'est qu'on a demandé le détail d'un employé
    $requete = $pdoENT->prepare("SELECT * FROM employes WHERE id_employes = :id_employes");
    $requete->execute(array(// bon à savoir : prepare va toujour avec execute
        ':id_employes' => $_GET['id_employes']// on associe le marqueur vide à l'id_employes qui provient de l'url ()

    ));

    //jeprint_r($requete);
    //jeprint_r($requete->rowCount());

    if( $requete->rowCount()==0) { // si il y a 0 ligne dans la $requete c'est que l'id n'existe pas 
        header('location:02_employes.php'); // on redirige vers une autre page
        exit(); // on arrête le script
    }

    //jeprint_r($requete);
    $fiche = $requete ->fetch(PDO::FETCH_ASSOC);
    //jeprint_r($fiche);
    } else {
        header('location:02_employes.php'); // on redirige vers une autre page
        exit(); // on arrête le script
    }

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
    
        $requete = $pdoENT->prepare( "UPDATE employes SET prenom = :prenom, nom = :nom, sexe = :sexe, service = :service, date_embauche =  :date_embauche, salaire = :salaire WHERE id_employes = :id_employes" );
        
        $requete->execute( array(
            ':prenom'=> $_POST['prenom'],
            ':nom'=> $_POST['nom'],
            ':sexe'=> $_POST['sexe'],
            ':service'=> $_POST['service'],
            ':date_embauche'=> $_POST['date_embauche'],
            ':salaire'=> $_POST['salaire'],
            ':id_employes' => $_GET[('id_employes')],

            //jevardump($requete);
            
        ) );
        echo '<p>success</p>';
        header('location:02_employes.php');
        exit;
        
        //jevardump($requete);
    }
    




?>

<!doctype html>

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
    
    <title>Cours PHP 7 - Fiche </title>
</head>
<body>
<?php require '../inc/navbar.inc.php'; ?>

    <!-- ============= NAV ============ -->
<div class="container jumbotron">
    <h1 class="display-4 list-group-item-success" >Cours PHP 7 - Employé <?php echo $fiche['prenom']. " " .$fiche['nom']; ?></h1>
    <p class="lead">insertion des bases de données d'une manière sécurisé</p>

</div><!-- /jumbotron -->
    <!-- ============= Conteu principl ============ -->
<main class="container">
<div class="row">
        <div class="row">
            <div class="col-md-12">
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                    
                    <h4 class="card-title alert alert-success"><?php echo $fiche['prenom']," ", $fiche['nom']  ?></h4>
                    <div class="list-group list-group-item list-group-item-action list-group-item-primary text-dark text-uppercase ">
                    <p class="card-text ">Service de travail : <?php echo $fiche['service']?></p>
                    <p class="card-text ">Salaire : <?php echo $nombre_format_francais = number_format($fiche['salaire'])." €"?></p>
                    <p class="card-text ">Date d'entré(e): <?php echo strftime('%A %e %B %Y', strtotime($fiche['date_embauche']))?></p>
                    </div>
                    </div><!-- card-body  -->
                </div><!-- card -->
            </div><!-- col -->
        </div><!-- row -->
    
        <div class="col-sm-12 col-md-8  mx-auto">   
        <h2>Les</h2>
        
        <!-- il faut faire un formulaire HTML avec une action et method ; action reste vide si nous insérons grâce à cette même page et POST va envoyer les infos dans la superglobale $_POST -->
            <form action="" method="POST" class="">
                    <!-- input text -->
                    <div class="form-group border border-secondary rounded  list-group-item-primary">
                        <div class="form-group col-md-6">
                        <label for="nom" class="text-dark text-uppercase " >nom</label>
                            <input type="text" name="nom"  class="form-control" id="nom"  placeholder="votre nom" value="<?php echo $fiche['nom']; ?>">
                        </div>
                        <div class="form-group col-md-6">
                        <!-- input text -->
                            <label for="prenom" class="text-dark text-uppercase ">Prénom</label>
                            <input type="text" name="prenom" class="form-control" id="prenom"  placeholder="votre prenom" value="<?php echo $fiche['prenom']; ?>">
                        </div>
                        <!-- service -->
                        <!-- input text -->
                        <div class="form-group col-md-6">
                        <label for="service" class="text-dark text-uppercase ">Service</label>
                        <select class="form-control"  name="service" id="service" value="">
                            <option value="direction" <?php if(!(strcmp("direction", $fiche['service']))) {echo "selected=\"selected\" ";} ?> >Direction</option>
                            <option value="commercial"  <?php if(!(strcmp("commercial", $fiche['service']))) {echo "selected=\"selected\" ";} ?> >Commercial</option>
                            <option value="production"  <?php if(!(strcmp("production", $fiche['service']))) {echo "selected=\"selected\" ";} ?> >Production</option>
                            <option value="secretariat" <?php if(!(strcmp("secretariat", $fiche['service']))) {echo "selected=\"selected\" ";} ?> >Sécrétariat</option>
                            <option value="comptabilite"  <?php if(!(strcmp("comptabilite", $fiche['service']))) {echo "selected=\"selected\" ";} ?> >Comptabilité</option>
                            <option value="communication"  <?php if(!(strcmp("communication", $fiche['service']))) {echo "selected=\"selected\" ";} ?> >Communication</option>
                            <option value="juridique"  <?php if(!(strcmp("juridique", $fiche['service']))) {echo "selected=\"selected\" ";} ?> >Juridique</option>
                            <option value="assistant"  <?php if(!(strcmp("informatique", $fiche['service']))) {echo "selected=\"selected\" ";} ?> >Assistant</option>
                            <option value="informatique">Informatique</option>
                        </select>
                        </div>
                        
                        <!-- sexe -->
                        <div class="form-group col-md-3">
                        <label for="sexe" class="text-dark text-uppercase ">Sexe</label>
                        <select id="sexe" name="sexe" class="form-control">
                            <option selected>Quel sexe? </option>
                            <option value="f"<?php if(!(strcmp("f", $fiche['sexe']))) {echo "selected=\"selected\" ";} ?> >Femme</option>
                            <option value="m" <?php if(!(strcmp("m", $fiche['sexe']))) {echo "selected=\"selected\" ";} ?> >Masculin</option>
                        </select>
                        </div>
                        <div class="form-group  col-md-4">
                        <!-- choose sex using check -->
                        <!-- <div class="form-check form-check-inline">
                            <label class="form-check-label pr-3 py-3" for="sexe" >Sexe </label>
                            <input type="radio" name="sexe" value="m" checked class="mx-2"> Homme
                            <input class="form-check-input mx-2" type="radio" name="sexe" id="sexe" value="<?php //if (isset($fiche['sexe']) && $fiche['sexe'] == 'f') echo 'cheched'; ?>"> Femme
                        </div> -->
                        </div>
                        <!-- date_embauche -->
                        <div class="form-group col-md-3">
                            <label for="date_embauche">date_embauche</label>
                            <input type="date" name="date_embauche"  class="form-control" value="<?php echo $fiche['date_embauche']; ?>">
                        </div>
                        <!-- salaire -->
                        <div class="form-group col-md-2">
                            <label for="salaire" class="text-dark text-uppercase ">salaire</label>
                            <input type="text" name="salaire" id="salaire" class="form-control pr-1" value="<?php echo $fiche['salaire']; ?>">
                        </div>
                        <button type="submit" class="btn btn-warning">Envoyer</button>
                    </div>
            </form>

        </div><!-- / col-->
        <!-- new col  -->
        <div class="col-md-4 pt-5">
            <div class="card-deck shadow p-1 m-1 bg-light rounded">
                <div class="card">
                    <div class="card-body">
                    <!-- add mr using if -->
                    
                
                    <h4 class="card-title alert alert-success"><?php  if($fiche['sexe'] == 'f') {
                            echo " Mme  ";
                        }else {
                            echo " Mr.  ";
                        }
                        
                        echo  $fiche['prenom']," ", $fiche['nom']  ?>
                    </h4>
                    
                    <div class="list-group list-group-item list-group-item-action list-group-item-primary text-dark text-uppercase ">
                    <p class="card-text ">Service de travail : <span class="text-uppercase"><?php echo $fiche['service']?></span></p>
                    <p class="card-text ">Salaire : <?php echo $nombre_format_francais = number_format($fiche['salaire'])." €"?></p>
                    <p class="card-text ">Date d'entré(e): <?php echo strftime('%A %e %B %Y', strtotime($fiche['date_embauche']))?></p>
                    </div>
                    </div><!-- card-body  -->
                </div><!-- card -->
            </div><!-- col -->
</div><!-- /row -->
                            
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

<?php require '../inc/footer.inc.php'; ?>
</body>
</html>

