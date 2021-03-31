<!doctype html>
<?php
// on appelle la page functionsphp 
require_once '../inc/functions.php';

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Cours PHP 7 - Introduction</title>
  </head>
  <body>
  <?php require '../inc/navbar.inc.php'; ?>
    <!-- ============= NAV ============ -->
    <div class="container jumbotron">
        <h1 class="display-4">Cours PHP 7 - Les tableau</h1>
        <p class="lead">Les tableaux représentent un type composé car ils permettent de stocker sous un même nom de variable plusieurs valeurs indépendantes d'un des types de base que vous venez de voir. C'est comme un tiroir divisé en compartiments. Chaque compartiment, que nous nommerons un élément du tableau, est repéré par un indice numérique (le premier ayant par défaut la valeur 0 et non 1). D'où l'expression de tableau indicé. </p>
        <a href="#" role="button" class="btn btn-primary btn-lg">learn more</a>

    </div><!-- /container -->
    <!-- ============= Conteu principl ============ -->
    <main class="container bg-white">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h2>1- Les Tableaux</h2>
                <p>Un tableau appelé array en anglais est une variable améliorée dans laquelle on stocked une multitude de valeurs. Ces valeurs peuvent être de n'importe quel type. Elles possedent un indice dont la numérotation commence par 0</p>
                <blockquote>
                    <?php 
                    $tab[0] = 2004;
                    $tab[1] = 3.14;
                    $tab[2] = "PHP 7";
                    $tab[35] = $tab[2]." et MySQL";
                    $tab[] = "coucou";// Il mettra l'indice 36 : avantage ajouter un élément à la fin d'un tableau sans connaître la valeur du premier indice disponible. 
                
                    echo "Nombre d'éléments du tableau = ". count($tab);
                    echo "<hr><p> le langage préféré de l'open source est $tab[2] <br>";
                    echo "Utilisez $tab[35]</p>";

                    //jevardump($tab);
                    //jeprint_r($tab);

                    
                    ?>
                </blockquote>
            </div><!-- /col -->

            <div class="col-sm-12">
            <h2>Les tableaux associatifs</h2>
            <p>Dans un tableau associatif nous pouvons choisir le nom des indices ou des index </p>

            <?php 

            $coleurs = array (
                'b'=> 'bleu',
                'bl'=> 'blanc',
                'rs'=> 'rose',
                'rg'=> 'rouge');

            jevardump($coleurs);
            // pour afficher une valeur de notrte tableau associatif en le cherchant par son indice
            echo '<p>La première couleur du tableau est ' .$coleurs['b']. '</p>';
            // dans les guillemets il y une exception, l'indice ne prend plus de quotes
            echo "<p>La première couleur du tableau est $coleurs[b]</p>";

            // mini exo compter le nombre d'élément du tableau
            
            echo" <p>nombre d'élément dans le tableau \$coleurs :" .count($coleurs)."</p>";

            echo" <p>nombre d'élément dans le tableau \$coleurs :" .sizeof($coleurs)."</p>";

            jeprint_r(count($coleurs));

            
            
            ?>
                
            </div><!-- /col -->

            <div class="col-sm-12">
            <h2>Les tableau multi-dimensionnels</h2>
            <p>Un tableau multi-ddimensionnel est un tableau qui contiendra une suite de tableau. Chaque tableau présente une "diemension"</p>
            <pre>
            $tableau_multi = array (
                0 => array (
                    'prenom' => 'Jean',
                    'nom' => 'Paul',
                    'telephone' => '01 23 26 86 74'
                ),
                1 => array (
                    'prenom' => 'Jules',
                    'nom' => 'ntsiba',
                    'telephone' => '03 23 01 86 74'
                ),
                2 => array (
                    'prenom' => 'Yvette',
                    'nom' => 'Maman',
                    'telephone' => '06 00 10 00 10'
                ),
            );
            // pour afficher jean on entre d'abord l'indice 0 puis dans le sous tableau on va à l'indice prenom

            echo $tableau_multi[0]['prenom'];
            </pre>
            <?php 

            $tableau_multi = array (
                0 => array (
                    'prenom' => 'Jean',
                    'nom' => 'Paul',
                    'telephone' => '01 23 26 86 74'
                ),
                1 => array (
                    'prenom' => 'Jules',
                    'nom' => 'ntsiba',
                    'telephone' => '03 23 01 86 74'
                ),
                2 => array (
                    'prenom' => 'Yvette',
                    'nom' => 'Maman',
                    'telephone' => '06 00 10 00 10'
                ),
            );
            // pour afficher jean on entre d'abord l'indice 0 puis dans le sous tableau on va à l'indice prenom

            echo $tableau_multi[0]['prenom'];

            jevardump($tableau_multi);

            // $tableau_multi
            echo "<ul class=\"bg-danger text-light\">";
            // pour parcourir le tableau multi-dimentionnel on peut faire une boucle for care
            for($i=0; $i < count($tableau_multi); $i++){
                echo "<li>".$tableau_multi[$i]['nom']. ' '.$tableau_multi[$i]['prenom']."</li>";

            }
            echo "</ul>";
            echo "<hr>";
            echo "<p>";
            foreach($tableau_multi as $key => $value) {
                echo $tableau_multi[$key]['prenom']. "<br>";
            }

            echo "</p>";
            echo "<hr>";
            echo "<p>";
            foreach($tableau_multi as $indice => $acteur) {
                echo $acteur['nom']. " ".$acteur['prenom']. "<br>";
            }
            echo "</p>";

            //jevardump($acteur['nom']);
            





            ?>

            </div><!--/col  -->




        </div><!-- /row -->
        

        <?php 
        require("../inc/footer.inc.php");
        ?> 

    </main><!-- /main -->


</body>
</html>

