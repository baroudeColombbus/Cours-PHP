<!doctype html>
<?php


?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <title>Cours PHP 7 - Introduction</title>
  </head>
  <body>



    <!-- ============= NAV ============ -->
    <div class="container jumbotron">
        <h1 class="display-4">Cours PHP 7 - Les boucles</h1>
        <p class="lead">Les boucles permettent de répéter des opérations élémentaires un grand nombre de fois sans avoir à réécrire le même code.</p>
        <hr class="my-4">
    </div>
    <!-- ============= Conteu principl ============ -->
    <main class="container">
    <div class="row rounded ">
            <div class="col-sm-12 col-md-6  ">
                <h2 class="alert alert-info">La boucle while</h2>
                <p>La boucle while permet d'affiner le comportement d'une boucle en réalisant une action de manière répétitive tant qu'une condition est vérifiée ou qu'une expression quelconque est évaluée à TRUE et donc de l'arrêter quand elle n'est plus vérifiée, évaluée à FALSE.</p>
                <?php 
                    $n = 1;
                    while($n%7 != 0) { // on cherche un modulo différent de 0 pour trouver un nommre qui n'est pas un multiple de 7 
                        $n = rand(1, 100); // rand() fait un tirage de nombres aléatoires compris entre 1 et 100 rand() pour random
                        echo $n. "&nbsp; -"; // non breaking space espace insécable
                    }
                ?>
            </div>
            <div class="col-sm-12 col-md-6">
                <h2 class="alert alert-info">La boucle do ...while</h2>
                <p>Avec , la condition n'est évaluée qu'après une première exécution des instructions  </p>

                <?php 
                $n2 = 1; // initialisation de la variable 

                var_dump($n2);
                do 
                    {
                        $n2 = rand(1,100);
                        echo $n2. "&nbsp; *";
                    }
                    while ($n2%7 !=0);// La condition, trouver un multiple de 7, n'est pas testée qu'àprès le premier tirage dè
                
                
                ?>


            </div><!-- col -->/
            <hr>
        </div><!-- fin row -->
        <div class="row bg-secondary">
            <div class="col-sm-12 col-md-6">
                <h2 class="alert alert-info">La boucle for</h2>
                <p>La boucle <pre><code>for</code></pre>est plus consise, plus ramassée que la boucle while </p>
                <pre class="text-danger">
                for ($i=0; $i<=8; $i++) {
                    $tab[$i] = pow(2,$i);
                }
                var_dump($tab);
                <hr>
                // boucle simple 
                for ($i = 0; $i >= 10; $i++){
                    echo $i. "**"
                }
                </pre>
                <?php


                for ($i=0; $i<=8; $i++) {// création d'un tableau avec éléments
                    $tab[$i] = pow(2,$i);// à l'aide d'une boucle et de la fonction pow();
                }
                var_dump($tab);
                echo "<hr>";
                $val = "une valeur";
                echo "Les puissance de 2 sont : ";
                foreach ($tab as $val) {
                    echo $val. " - ";
                }

                ?>
            </div><!-- /col -->
            <div class="col-sm-12 col-md-6">
                <h2 class="alert alert-info">La boucle foreach</h2>
                <p>La boucle foreach (pour chaque)est efficace pour lister les éléments d'un tableau.</p>
                <pre class="text-danger">
                    //example foreach
                $val = "une valeur";
                echo "Les puissance de 2 sont : ";
                foreach ($tab as $val) {
                    echo $val. " - ";
                }
                </pre>
                <p>Lecture des indices et des valeurs d'un tableau</p>

                <?php 
                // création d'un autre tableau
                for ($i=0; $i<=5; $i++) {
                    $tab[$i] = pow(2,$i);
                }

                var_dump($tab);
                // Lecture des indices et des valeurs d'un tableau
                foreach ($tab as $ind=>$val ) {
                    echo "2 puissance $ind vaut $val <br>";
                }
                echo " <br><p class=\"alert alert-success\">Le dernier indice de mon tableau est $ind et la dernière valeur est $val</p>";

                
                echo "<hr>";
                $val = "une valeur";
                echo "Les puissance de 2 sont : ";
                foreach ($tab as $val) {
                    echo $val. " - ";
                }

                $tab1 = array('France'=>"Paris",'Allemagne'=>"Berlin",'Italie'=>"Rome",'Senegal'=>"Dakar");
                foreach ($tab1 as $val) {
                    echo $val."<br>";
                }
                
                ?>

            </div><!-- /col -->
        </div>



    </main>
       <!-- script bootstrap/popper/jquery dependencies -->
   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="jquery/jquery-3.5.1.js"></script>
    <script src="jquery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>



    ?>
</body>
</html>

