<?php 
require_once('inc/functions.php');

$pdoSITE = new PDO('mysql:host=localhost;dbname=site', //on a en premier lieu le driver mysql (IBM, ORACLE, OBC ...), le no du serveur, le nom de la BDD
'root', // l'utilisa pour la BDD
'', //si vous êtes sur MAC il y un mdp = 'root
array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, //cette ligne sert à afficher les erreurs SQL dans le navigateur
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //pour définir le charset des échanges avec la BDD

));

// if($pdoSITE == TRUE){
//     echo "succes";
// } else {
//     echo "failed ";
// }

$requete_membre = $pdoSITE->query( "SELECT * FROM membre");
//print_r($requete_membre);


$ligne = $requete_membre ->fetch( PDO ::FETCH_ASSOC );

jeprint_r($ligne);

//print_r($ligne);

echo $ligne['prenom'];










?>