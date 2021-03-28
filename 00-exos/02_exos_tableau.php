<!doctype html>
<?php
require_once '../inc/functions.php';

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
        <h1 class="display-4">Cours PHP 7 - Les tableaux</h1>
        <p class="lead">Les boucles permettent de répéter des opérations élémentaires un grand nombre de fois sans avoir à réécrire le même code.</p>
        <hr class="my-4">
    </div>
    <!-- ============= Conteu principl ============ -->
    <main class="container">
    <div class="row rounded ">
            <div class="col-sm-12 col-md-12  ">
            
            <pre>
            $tableau1 =  array( 'Dalio', 'katia semedo', 'Gabin',' anna', 'nancy');
            <hr>
            var_dump($tableau1);
            </pre>
        

            <?php 

            echo "<pre>"; 
            // déclarer un tableay, les valeurs 
            $tableau1 =  array( 'Dalio', 'katia semedo', 'Gabin',' anna', 'nancy');
            echo "</pre>";

            // echo $tableau1;, erreur de type "array to string conversion" on ne peut pas afficher directement un tableau

            echo "<pre>"; 
            var_dump($tableau1);// var_dump affiche le contenu du tableau et es données et les valeurs
            echo "</pre>";
            
            echo "<pre>"; 
            print_r($tableau1);
            echo "</pre>";

            // autre façon de déclarer un array 
            echo "<pre>"; 
            echo "<p>autre façon de déclarer un array</p>";
            $tableau2 = ['France',' Espagne', 'Italie',' Portugal'];
            var_dump($tableau2);

            // rajouter un élément dans notre tableau avec les crochets
            echo "<p>rajouter un élément dans notre tableau avec les crochets</p>";
            $tableau2 [] = 'Roumanie';

            // ici on affiche le nouveau contenu
            print_r($tableau2);
            echo "</pre>";

            // affiche le contenu 
            echo "<p>affiche le contenu d'une array on utilisant la fonction</p>";
            jevardump($tableau2);

            //affiche 
            "<pre class=\"alert alert-danger\">";
            echo "<p>affiche le contenu d'une array on utilisant la fonction faite avec print_r</p>";


            jeprint_r($tableau2);
            "</pre>";

            echo "<ul class=\"w-50 bg-warning\">";
            // on parcourt le tableau $tableau1 par ses vleurs
            // la variable $values prends les $valeurs du tableau successivement à chaque tour de boucle, le mot clef "as" est OBLIGATOIRE
            foreach($tableau1 as  $values){
                  echo "<li>";
                  echo $values;
                  echo "</li>";
            }
            echo "</ul>";
            ////////////////////////////////////////////////////////

            echo "<ul class=\"w-50 bg-warning\">";
            foreach ($tableau2 as $pays){
              echo "<li class=\"text-white\">$pays</li>";
            }
            echo "</ul>";

            //

            

            echo "<ul class=\"w-50 bg-info\">";
            foreach ($tableau2 as $key => $valeurs){
              echo "<li class=\"text-dark\"> pour $key, la valeur est $valeurs</li>";
            }
            echo "</ul>";






            ?>
            <p>déclarez un tableau associatif $contacts avec les indices suivants : prenom, nom, email et téléphone et vous y mettez les valeurs correspondant à un seul contacts</p>
            <ul>
            <li>Puis avec une boucle foreach vous affichez les valeurs</li>
            <li>Puis dans une autre boucle vous affichez les valeurs dans p sauf le prénom qui doit être dans un h3</li>
            </ul>
            <pre>
        
            </pre>

              <?php
            
            $contacts = array (
                  'prenom' => 'baroude',
                  'nom'=> 'ntsiba',
                  'email' => 'ntb@yahoo.com',
                  'telephone' => "07 06 89 06 74" );

            echo "<ul>";
            
            foreach($contacts as $contact){
              echo "<pre>"; 
              echo $contact;
              echo "</pre>";
            }
            

            echo" <hr>";
            echo '<ul>';
           
            foreach($contacts as $clef => $valeurs){
              echo "<pre>"; 
              echo "<li> Pour <strong>" .$clef. "</strong> la valeur est : <strong class=\"text-danger\">" .$valeurs."</strong></li>" ;
              echo '</pre>';
            } 
          
            echo '</ul>';

            //3 avec switch
            foreach ($contacts as $key => $value) {
              switch ($key) {
                  case 'nom' :
                    echo "<p>pour le ".$key ." la valeur est : ". $value."</p>";
                      break ;
                  case 'prenom' :
                      echo "<h3>pour le ".$key ." la valeur est : ". $value."</h3>";
                      break ;
                  case 'email' :
                    echo "<p>pour le ".$key ." la valeur est : ". $value."</p>";
                    break ;
                  case 'telephone' :
                      echo "<p>pour le ".$key ." la valeur est : ". $value."</p>";
                      break ;
                    
              }
          }

           //
          echo "<div class=\"bg-info\">";
          foreach ($contacts as $key => $value){
            if ($key == 'nom' ){
              echo "<h3>$value</h3>";
            }else {
              echo "<p>$value</p>";
            }
          }
          echo "</div>";

          //1- faire un tableau $tailles avec des tailles de vêtements du small au xl, et les afficher avec une boucle foreach dans une ul
          //2 - puis les afficher dans un select avec une boucle foreach
          // 1
          $tailles = array (
                    'xs' => '34-34',
                    's' => '38-40',
                    'm' => '42-44',
                    'l' => '48-50',
                    'xl' => '52-54'
          );
          echo "<ul>";
          foreach($tailles as $key => $value){
            echo "<li>La taille <strong>" .$key. " </strong>correspond à : ".$value."cm de tour de taille </li>";
          }
          echo "</ul>";
          //2 

          echo "<select >";
          foreach($tailles as $key => $value){
            echo  "<option value=\".key\">" .$key. ' correspond à ' .$value."cm</option>";
          }

          echo "</select>";


              ?>

        

            </div> <!-- / -->
    </div><!-- / -->
    
    

    </main>
    <!-- script bootstrap/popper/jquery dependencies -->
    <script src="jquery/jquery-3.5.1.js"></script>
    <script src="jquery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <?php




    ?>
</body>
</html>

