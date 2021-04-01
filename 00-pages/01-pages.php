<!DOCTYPE html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
<?php

$variable1 = "PHP 7 qui est dans une variable";

?><!-- / channel PHP -->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "<title>Document</title>"; ?>
</head>
<body>
<?php require '../inc/navbar.inc.php'; ?>
    <?php

    echo "<h1>Cours sur le $variable1</h1>";
    
    ?>
    <p>utilisation de varibales PHP et de passage PHP <br>
    <?php
    $variable2 = "MySQL";
    echo $variable2;
    echo  "</p>";
    $variable2 = "coucou";
    echo $variable2;
    ?>
    <hr>

    <?= "<blockquote>$variable2, $variable2, on entend le $variable2</blockquote>";
    
    ?>

    <?php echo "<blockquote> <strong>avec echo</strong> $variable2, $variable2, on entend le $variable2</blockquote>";
    
    ?>
    
    <?php print_r($GLOBALS); ?> 
    <hr>
    <?php print_r($_COOKIE);?>
    <hr>
    <?php print_r($_ENV);?>
    <hr>
    <?php print($_SERVER['SERVER_SOFTWARE']); ?>
    <hr>

    <hr>


    
</body>
</html>