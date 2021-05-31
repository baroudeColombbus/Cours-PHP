<?php 
// init 
// fichier indispensable au fonctionnement 

///////// 1- connexion a la base de données           ///////////

$pdoSITE = new PDO('mysql:host=localhost;dbname=site', //on a en premier lieu le driver mysql (IBM, ORACLE, OBC ...), le no du serveur, le nom de la BDD
'root', // l'utilisa pour la BDD
'', //si vous êtes sur MAC il y un mdp = 'root
array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, //cette ligne sert à afficher les erreurs SQL dans le navigateur
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //pour définir le charset des échanges avec la BDD

));

    ///////// 2- OUVERTURE DE SESSION     ///////////
    session_start();

     ///////// 3- CHEMIN DU SITE AVEC CONSTANTE    ///////////

    // constante qui défini le dossier dans lequel se situe
    // chew l4hebergeur on se contente de define( echo RACINE_SITE .'index.php';)
define('RACINE_SITE', '/cours-php/10-boutique/');
     ///////// 4-          ///////////
    
     $contenu = '';


      ///////// 5-          ///////////
      require_once('functions.php')



?>