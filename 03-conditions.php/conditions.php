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
        <h1 class="display-4">Cours PHP 7 - Les instructions ou les conditions</h1>
        <p class="lead">On retrouve dans PHP la plupart des instructions de contrôle des scripts. Indispensables à la gestion du déroulement d'un algorithme quelconque, ces instructions sont présentes dans tous les langages. PHP utilise une syntaxe très proche de celle du langage C. Ceux qui ont déjà pratiqué un langage tel que le C ou plus simplement JavaScript seront en pays de connaissance.</p>
    
        <a href="#" role="button" class="btn btn-primary btn-lg">learn more</a>
    </div>
    <!-- ============= Conteu principl ============ -->
    <main class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <h2>condition: if( )</h2>
                <p>L'instruction <code>if</code> est la plus simple et la plus utilisée des instructions conditionnelles. Présentente dans tous les langages de programmation, elle est essentielle en ce quelle permet d'orienter l'éxecution du script en fonction de la valeur booléenne d'une expression</p>
                <?php 
                $a = 100;
                $b = 55;
                $c = 25;

                if($a > $b && $b>$c) {
                    echo "<p class=\"alert alert-success w-75 mx-auto text-dark\">Les deux conditions sont ok</p>";
                }
                
                
                ?>
            </div><!-- /col -->
            <div class="col-sm-12 col-md-4">
                <h2>condition: if ... else</h2>
                <p>L'instruction <code>if ...else</code> permet de traiter le cas où l'expression conditionnelle est TRUE et en même temps d'écrire un traitement de rechange quand elle est évalué à FALSE, ce qui ne permet pas une instruction if seule. L'instruction ou le bloc qui suite <code>else</code> est alors le seul à être exécuté. L'exécution continue ensuite normalement après le bloc <code>else</code>.</p>
                <?php 
            
                echo "<p class=\"alert alert-success w-75 mx-auto text-dark\">";
                if($a > $b && $b>$c) {
                    echo "$a est supérieur à $b";
                } else {
                    echo "$b est supérieur à $a";

                }
                echo "<p>";

                // autre exemple d'un if else 
                echo "<hr>";

                $e = 10;
                $f = 5;
                $g = 2;
                echo "<p class=\"alert alert-success w-75 mx-auto text-dark\">";
                if($e == 9 || $f > $g ) {
                    echo "Ok pour moins une des deux conditions";
                }else {
                    echo "les deux conditions sont fausses";
                }
                echo "</p>";

                ?>
                <p>Le bloc qui suit les instruction if ou else peut contenir toutes sortes d'instructions, y compris d'autres instruction <code>if ... else </code> Nous obtenons dans ce cas une syntaxe plus complexe, de la forme : à suivre</p>
                <p class="text-warning">Il existe  une autre manière d'écrire un if... else ; <span class="text-warning">la condition ternaire</span> </p>
                <p class="">Dans la ternaire le ? remplace le if et le : remplace le else</p>
                <?php
                
                $h = 10;
                if ($h == 10) {
                    echo "$h est égal à 10";
                }else {
                    echo "$h est différent de 10";
                }
                
                // la même en ternaire
                echo ($h == 10 ) ? "$h est égal à 10" : "$h est différent de 10";
                
                ?>

            </div><!-- /col -->
            <div class="col-sm-12 col-md-4">
                <h2>if... else ... else...</h2>
                <?php 
                $d = 8;
                echo "<p class=\"alert alert-success w-75 mx-auto text-dark\">";

                if ( $d == 8 ) {
                    echo "Réponse 1 : \$d est égale à 8";
                } elseif ( $d != 10 ) {
                    echo "Réponse 2 : \$d est différent de 10";
                } else {
                    echo "Réponse 3 : les deux conditions sont fausses";
                }
                echo "</p>";
                
                ?>

            </div><!-- /col -->
        </div>
        <!-- new row -->
        <div class="row">
            <div class="col-sm-12 col-md-6 border border-success">
                <h2>Switch... case</h2>
                <p>Switch permet de comparer à une multitude de valeur comme instruction if... else if ... else</p>

                <?php
                $department = 75;
                switch ($department){
                    case 75 : 
                        echo "Paris"; 
                        break;
                    case 57 : 
                        echo "La Moselle"; 
                        break;
                    case 54 : 
                        echo "Meurthe-et-moselle"; 
                        break;
                    case 78 : 
                        echo "Yvelines"; 
                        break;
                    default: 
                        echo "Départment inconnu en île de France"; 
                        break;
                }
                
                ?>

            </div><!-- /col -->
            <div class="col-sm-12 col-md-6 border border-success">
                <h2></h2>

            </div><!-- /col -->

        </div><!-- /row -->
        

    </main>
    <!-- script bootstrap/popper/jquery dependencies -->
    <script src="jquery/jquery-3.5.1.js"></script>
    <script src="jquery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <?php


    ?>
</body>
</html>

