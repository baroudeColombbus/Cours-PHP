<?php 
require_once '../inc/functions.php';

echo '<h1>Cours PHP 7 - $_SESSION</h1>';
echo '<p>Les données du fichier de session sont accessibles et manipulables à de la superglobale $_SESSION.</p>';

// la fonction session_start() si on a besoin des informations de session devra être placée au début de chaque page
session_start(); // permet de créer un fichier de session avec son identifiant OU de l'ouvrir si il existe déja et que l'on a reçu un cookie avec l'id dedans

//Principe des sessions : un fichier temporaire est crée sur le serveur, avec un identifiant unique. Cette $_SESSION est liée à un internaute. Dans le même temps un cookie est déposé sur le post de l'internaute avec l'identifiant (au nom de PHPSESSID).
// Ce cookie se détruit quand on quitte le navigateur.
// le fichier de $_SESSION peut contenir des informations sensibles !!! il n'est pas accessible par l'internaute

$_SESSION['pseudo'] = 'Tintin';//
$_SESSION['mdp'] = 'vol747';
$_SESSION['email'] = 'tintin@gmail.com';

echo '<p>La session est remplie.</p>';
echo '<pre>';
jeprint_r($_SESSION);
echo '</pre>';

// Il est possible de vider une partie de la session avec unset()

// unset($_SESSION['mdp']);
// echo '<pre>';
// jeprint_r($_SESSION);
// echo '</pre>';


// supprimer entirement une $_SESSION
//session_destroy();
// on verifie que la $session_destroy() a bien totatalement détruit la $_SESSION

// La $_SESSION est detruite.Nous avons effectué une session_destroy() mais il n'est pas exécuté qu'à la fin de notre script. Nous voyons encore ici le contenu de la $_SESSION, mais le fichier temporaire dans le dossier temp a bien été supprimé.

// ce fichier contient les informations de session et elles sont accessibles grâce à session_start()

//echo '<pre>';
//jeprint_r(ppp);
//echo '</pre>';










?>