<!DOCTYPE html>
<?php 
    $varibale1 = " la page faite avec des fichiers en inc"
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php 
    echo "<title>Cours PHP - Avec les fichier include</title>";
    ?>
</head>
<body>
    <?php
            echo "<div><h1 style=\"border-width:5;border-style:double;background-color:#ffcc99;\">Bienvenue sur $varibale1</h1>";

            echo "<p>Une fonction qui donne le nom du fichier executé :".$_SERVER['PHP_SELF'], "</p></div>";// on n'est pas obligé de fermer les passage PHP

            /* 
            ceci est un commentaire 
            multi ligne 
            */

        
        ?>
    