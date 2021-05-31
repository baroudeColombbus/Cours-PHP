<?php require_once '../inc/functions.php';?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

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
            <div class="col-sm-12 col-md-4">
                <h2>1- Connexion à la BDD</h2>
                <p><abbr title="PHP data objet">PDO</abbr>est l'acronyme de PHP Data Object</p>
                <p><code>PDO_MYSQL</code> est un pilote qui implémente l'interface de PHP Data Objects (PDO) pour autoriser l'accès de PHP aux bases de données MySQL. PDO_MYSQL utilises des requêtes préparées émulées par défaut.</p>
                <?php
                $pdoENT = new PDO('mysql:host=localhost;dbname=entreprise', //on a en premier lieu le driver mysql (IBM, ORACLE, OBC ...), le no du serveur, le nom de la BDD
                    'root', // l'utilisateur pour la BDD
                    '', //si vous êtes sur MAC il y un mdp = 'root
                    array(
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, //cette ligne sert à afficher les erreurs SQL dans le navigateur
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //pour définir le charset des échanges avec la BDD

                    ));
                    

                    /***
                     * connexion Baroude NTSIBA
                     */
                    // $host='localhost';
                    // $database='entreprise';
                    // $user='root';
                    //$psw='root';//mot de passe MAMP MAC
                    // $psw='';

                    // $pdoENT = new PDO('mysql:host='.$host. ';dbname=' .$database, $user, $psw);
                    // $pdoENT ->exec("SET NAMES utf8");

                    jeVarDump($pdoENT); //l'objet est vide car il n'y a pas de propriéités
                    jeVarDump(get_class_methods ($pdoENT)); //permet d'afficher la liste des méthodes présentes dans l'objet PDO

                ?>
            
            </div>
            <!-- fin col -->
               
            <div class="col-sm-12 col-md-4">
                <h2>2- Faire des réquêtes avec exec()</h2>
                <p>La méthode <code>exec()</code> est utilisée pour faire des requêtes qui retournent pas de résultats : INSERT, UPDATE, DELETE</p>
                <p>Valeurs de retours : <br>
                Succés : dans le jeVarDump de $requete on aura le nombre de lignes affectées par la requête, 3 delete = integer(3),  <br>
                Echo : false = 0
                </p>
                <?php
                    //on va insérer un employé dans la BDD
                    // requête SQL d'insertion dans la BDD dans la table employes
                    //INSERT INTO employes (prenom, nom, sexe, service, date_embache, salary) VALUES ('Jean', 'Bon', 'm', 'informatique', '2021-03-18', 2000)

                    //$requete = $pdoENT->exec( "INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Jean', 'Bon', 'm', 'informatique', '2021-03-18', 2000)" );

                //  $requete = $pdoENT->exec("DELETE FROM employes WHERE prenom='Jean' AND nom='Bon'");
                //  jeVarDump($requete);

                // echo "Dernier id générée en BDD : " .$pdoENT->LastInsertId();
                ?>
        
            </div>
            <!-- fin col -->
            <div class="col-sm-12 col-md-4">
            <h2>3- Faire des requêtes avec <code>query()</code></h2>
            <p><code>query()</code> est utilisé pour faire des requêtes qui retournent un ou plusieur résultats :SELECT mais aussi DELETE, UPDATE et INSERT</p>
            <p>Succés : query () retourne un nouvel objet qui provint de la classe PDO statement.
                <br>
                Echec : false
            </p>
            <ul>
                <li>Pour information, on peut mettre dans les paramétres () de fatch()</li>
                <li>PDO::FETCH_MUM : pour obtenir un tableau aux indices numérique</li>
                <li>Ou encore des () vides : pour obtenir un mélange de tableau associatif et numérique</li>
            </ul>

            <?php
               //1- on demande des information à la BDD car il y a un ou plusieurs résultats avec query()
                // $requete = $pdoENT->query( "SELECT * FROM employes WHERE prenom= 'Amandine' ");
                $requete = $pdoENT->query( "SELECT * FROM employes WHERE id_employes= '417' ");

                // jeVarDump($requete);

                //2- dans cet objet $requete nous ne voyons pas encore les doonées concenant amandine. Pourtantelles s'y trouvent.Pour y accéder nous devon sutiliser une méthode de $requete qui s'appelle fetch() 
                
                $ligne = $requete ->fetch( PDO ::FETCH_ASSOC );
                //3- avec cette méthode fetch() on transforme l'object $requete
                //4- fectch(), avec le paramétre PDO:: FETCH_ASSOS permet de transformer l'objet $requete en un array associatif appelé ici $ligne : on y trouve en indice le nom des champs de la réquêtes SQL
                jeVarDump($ligne);

                echo "<p>Nom : " .$ligne['prenom']. " " .$ligne['nom']. "/<p>";
                echo "<p>Service : " .$ligne['service']. " " .$ligne['date_embauche']. " " .$ligne['salaire']. " €" ."</p>";
     

                /***
                 * Vendredi 19/03/2021
                 */
                //EXO : afficher le service de l'emloyé dant l'id est 417 et son nom et son prénom
                // $ligne = $requete->fetch(PDO::FETCH_ASSOC);
                echo "<h4>Afficher le service de l'emloyé dant l'id est 417</h4>";
                echo "<ul class=\"alert alert-secondary\">";
                echo "<p>Id employe : " .$ligne['id_employes']. "</p>";
                echo "<p>Nom : " .$ligne['nom']. " " .$ligne['prenom']. "</p>";
                echo "</ul>";
                ?>

            </div>
            <!-- fin col -->
            <div class="col-12-">
                <h2>04- Faire des requêtes avec <code>query()</code> et afficher plusieurs résultats</h2>

                <?php
                    // SELECT * FROM employes
                    $requete = $pdoENT->query("SELECT * FROM employes");
                    jeVarDump($requete);
                    $nbr_employes = $requete->rowCount(); //cette méthode rowCount() permet de compter le nbr de rangées (d'enregistrements) retournés par la requête
                    // jeVarDump($nbr_employes);
                    echo "<p>Il y a " .$nbr_employes. " employés dans la base.</p>";
                    //comme nous avons plusieurs résultats dans $requete nous devons faire une boucle pour les parcourir 
                    //fetch() va chercher la ligne suivante au jeu de résultat àchaque tour de boucle, et le tranforme en object. La boucle while permet de faire avancer le curseur dans l'objet. Quand à la fin, fetch() retoune FALSE et la boucle s'arrête
                    while ($ligne = $requete->fetch(PDO ::FETCH_ASSOC)) {
                        // jeVarDump();
                        echo "<p>Nom : " .$ligne['prenom']. " " .$ligne['nom']. " travaille au service : " .$ligne['service']. "</p>";
                    }
                    echo "<hr>";


                    //EXO : afficher la liste des différents services dans une ul en mettant un service pas li
                    // $requete = $pdoENT->query("SELECT DISTINCT (service) FROM employes");
                    $nbr_services = $requete->rowCount();
            
                    echo "<p>Il y a " .$nbr_services. " service dans la société.";
                    echo "<ul>";
                    while ($ligne = $requete->fetch(PDO ::FETCH_ASSOC)) {
                         //  jeVarDump($requete);
                        echo "<li>Service : ".$ligne['service']. " " .$ligne['service']. " " .$ligne['date_embauche']. " " .$ligne['salaire']. " €" ."</li>";
                    }
                    echo "</ul>";
                    echo "<hr>"
                ?>
            </div>
            <!-- fin col -->
            <div class="col-sm-12">
                <!-- 
                EXO :
                    1- dans un h2 compter le nombre d'employées
                    2- puis afficher toutes les informations des employés dans un tableau HTML triés par ordre 
                -->
                <?php
                    // $requete = $pdoENT->query("SELECT  id_employes, prenom, nom, service, date_embauche, salair FROM employes");
                    $requete = $pdoENT->query("SELECT * FROM employes");
                    $nbr_employes = $requete->rowCount();

                    /**
                     * ASAAD
                     */
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
                    echo "</table>";

                    /**
                     *  
                     * 
                     */
                    // echo "<table class=\"table table-primary table-striped\">";
                    // echo "<thead>";
                    // echo "<tr>";
                    // echo "<th>ID</th>";
                    // echo "<th>Nom, prénom</th>";
                    // // echo "<th>Sexe</th>";
                    // echo "<th>Service</th>";
                    // echo "<th>Date d'entrée</th>";
                    // echo "<th>Salaire mensuel</th>";
                    // echo "</tr>";
                    // echo "</thead>";
                    // while ( $employe = $requete->fetch( PDO::FETCH_ASSOC )) {
                    //     echo "<tr>";
                    //     echo "<td>" .$employe['id_employes']. " </td>";
                    //     if ( $employe['sexe'] == 'f') {
                    //     echo "<td> Mme " .$employe['nom']. " " .$employe['prenom']. "</td>"; 
                    //     } else {
                    //     echo "<td> M. " .$employe['nom']. " " .$employe['prenom']. "</td>"; 
                    //     }            
                    //     // echo "<td>" .$employe['sexe']. " </td>";
                    //     echo "<td>" .$employe['service']. " </td>";
                    //     echo "<td>" .$employe['date_embauche']. " </td>";
                    //     echo "<td>" .$employe['salaire']. " €</td>";
                    //     echo "</tr>";
                    // }
                    // echo "</table>";
                // reprendre ici LUNDI 
                echo "<table class=\"table table-sm table-success table-striped\">";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Nom, prénom</th>";
                  // echo "<th>Sexe</th>";
                echo "<th>Service</th>";
                echo "<th>Date d'entrée</th>";
                echo "<th>Salaire mensuel</th>";
                echo "</tr>";
                echo "</thead>";
                
                setlocale(LC_ALL, 'fr_FR.UTF8','fr_FR');
                

                
                foreach ( $pdoENT->query( " SELECT * FROM employes ORDER BY sexe DESC, nom ASC " ) as $infos ) { //$employe étant un tableau on peut le parcourir avec une foreach. La variable $infos prend les valeurs successivement à chaque tour de boucle
                  // jevardump($infos);
                    echo "<tr>";
                    echo "<td>";
                    
                    if ( $infos['sexe'] == 'f') {
                        echo "<span class=\"badge badge-secondary\">Mme ";
                    } else {
                        echo "<span class=\"badge badge-primary\">M. ";
                    } echo $infos['nom']. " " .$infos['prenom']. "</span></td>";
                    echo "<td>" .$infos['service']. " </td>";
                    //echo "<td>" .date('d/m/Y', strtotime($infos['date_embauche'])). " </td>";
                    // echo "<td>" .$infos['date_embauche']. " </td>";
                    echo "<td>" . strftime('%A %e %B %Y', strtotime($infos['date_embauche'])). " </td>";
                    echo "<td>" .$nombre_format_francais = number_format($infos['salaire'], 2, ',', ' '). " €</td>";
                    echo "</tr>";
                }
                echo "</table>";

                
                ?>
    
            </div><!-- /col -->
            <div class="col-sm-12">
                <h2>05-Requêtes préparées avec <span class="text text-danger">prepare( )</span></h2>
                <p>Les requêtes préparées sont préconisées si vous exécuter plusieurs fois la même requête, ainsi vous éviterez au SGBD de répéter toutes les phrases, analyses, interprétations exécution etc.. >> on gagne en performance</p>
                <p>Les requêtes préparées sont utiles pour nettoyer les données et se prémunir des injections de type SQL (tentative de piratage )cf. 09-securite</p>
                <?php
                    // une requête preparé se réalise en 3 étapes
                    // 1/ on prépara la requête
                    $nom = 'Sennard'; // j'initialise ma variable que je veux trouver

                    $resultat = $pdoENT->prepare("SELECT * FROM employes WHERE nom=:nom "); // a/ permet de préparer la requête sans l'exécuter.
                    // b/ :nom est un marqueur qui est vide (comme une boîte vide) et qui attend une valeur c/ $resultat est pour le moment est un object PDOstatement

                    //jevardump($resultat);

                    // 2/ on lie le marqueur :nom à une variable $nom
                    $resultat->bindParam( ':nom',$nom);
                    //jevardump( $resultat,"test");

                    // 3/ puis on éxecute la requête 
                    $resultat->execute();//permet d'exécuter toute la requête
                    jevardump($resultat);
                    $employe = $resultat->fetch( PDO::FETCH_ASSOC );
                    //echo $employe;
                    //jevardump($employe['nom']);

                    //echo "<p>" .$employe['prenom']. ' '. $employe['nom']. 'service : ' .$employe['service'].. "</p> ";

                    echo $employe['prenom'] . ' ' . $employe['nom']. ' -  service : ' . $employe['service'] . '<br>';

                    echo "<hr>";
                    //prepare() et boucle 
                    $requete = $pdoENT->prepare( " SELECT * FROM employes " ); 
                    $requete->execute();
                    $nombre_employes = $requete->rowCount();
                    jevardump($nombre_employes);
                    while ( $ligne = $requete->fetch( PDO::FETCH_ASSOC ) ) {
                            echo "<p>Nom : " .$ligne['prenom']. " " .$ligne['nom']." travaille au service : " .$ligne['service']."</p>";
                        }

                ?>
                <?php 
                echo "<hr>";
                // requête préparée sans bindParam
                $resultat = $pdoENT->prepare( " SELECT * FROM employes WHERE prenom = :prenom AND nom = :nom " );// préparation de la requête
                $resultat->execute(array(// on fabrique un tableau
                    ':nom' => 'Thoyer',
                    ':prenom' => 'Amandine'// on peut se passer de bindParam
                ));
                // jevar_dump($resultat);
                $employe = $resultat->fetch(PDO::FETCH_ASSOC);// on va chercher les infos
                // jevar_dump($employe);
                echo $employe['prenom']. " " .$employe['nom']. " est au service " .$employe['service'];// on affiche les infos
                
            
                ?>

            </div><!-- /col -->
        </div><!-- fin row -->
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

</html>