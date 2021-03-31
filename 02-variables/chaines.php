<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
 
    <title>Cours PHP 7 - Introduction</title>
  </head>
  <body>
  <?php require '../inc/navbar.inc.php'; ?>
    <!-- ============= NAV ============ -->
    <div class="container jumbotron">
        <h1 class="display-4">Cours PHP 7 - Les chaines</h1>
        <p class="lead">Les chaînes de caractères sont avec les nombres les types de données les plus manipulés sur un site web. De surcroît, dans les échanges entre le client et le serveur au moyen de formulaires, toutes les données sont transmises sous forme de chaînes, d'où leur importance.</p>
        <a href="#" role="button" class="btn btn-primary btn-lg">learn more</a>

    </div><!-- /container -->
    <!-- ============= Conteu principl ============ -->
    <main class="container bg-white">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h2>1- Les opérateurs numériques</h2>
                <p>Une chaine de caractère est une suite de caractères alphanumérique contenus entre les guillemets (apaostrophes) ou doubles</p>
                <p>Si une chaine contient une variable, celle-ci est évaluée, et sa valeur incorporée à la chaine uniquement si vous utilisez des guillemets et non des apaostrophes <br>
                <?php 
                $vartest = "coucou";
                echo "je dis $vartest";
                
                ?>
            
            </p>

            <ul>
                    <li>$a = 'PHP';</li>
                    <li>$b = 'MySQL';</li>
                    <li>$c = "PHP et $b";//affiche : PHP et MySQL</li>
                    <li>$d = 'PHP et $b'; //affiche PHP et $b car $ et b sont considérés comme des caractères sans signification particulière</li>
				</ul>

            </div><!-- /col -->
            <div class="col-sm-12">
                <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Séquence</th>
                            <th scope="col">Signification</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">\'</th>
                                <td>Affiche une apostrophe.</td>
                            </tr>
                            <tr>
                                <th scope="row">\"</th>
                                <td>Affiche des guillemets.</td>
                            </tr>
                            <tr>
                                <th scope="row">\$</th>
                                <td>Affiche le signe $.</td>
                            </tr>
                            <tr>
                                <th scope="row">\\</th>
                                <td>Affiche un antislash.</td>
                            </tr>
                            <tr>
                                <th scope="row">\n</th>
                                <td>Nouvelle ligne (code ASCII 0x0A).</td>
                            </tr>
                            <tr>
                                <th scope="row">\r</th>
                                <td>Retour chariot (code ASCII 0x0D).</td>
                            </tr>
                            <tr>
                                <th scope="row">\t</th>
                                <td>Tabulation horizontale (code ASCII 0x09).</td>
                            </tr>
                            <tr>
                            <th scope="row">\[0-7] {1,3}</th>
                            <td>Séquence de caractères désignant un nombre octal (de 1 à 3 caractères 0 à 7) et affichant le caractère correspondant :
                            echo "\115\171\123\121\114"; //Affiche MySQL.</td>
                        </tr>
                        <tr>
                            <th scope="row">\x[0-9 A-F a-f] {1,2}</th>
                            <td>Séquence de caractères désignant un nombre hexadécimal (de 1 à 2 caractères 0 à 9 et A à F ou a à f) et affichant le caractère correspondant :<br>
                            echo "\x4D\x79\x53\x51\x4C"; // Affiche MySQL</td>
                        </tr>
                        </tbody>
                        </table>

            </div><!-- /col -->

            <div class="col-sm-12">
                <h2>Concaténer les chaines de caractères</h2>
                <p>L'opérateur PHP de concaténation est le point(.) qui fusionne deux chaines litérales ou contenues dans la des variables en une chaîne</p>
                <p>
                    <?php 
                    $langage1 = "PHP";
                    $langage2 = "MySQL";
                    $phrase ="utilisez ".$langage1. " et " .$langage2. " pour construire un site dynamique <br>";
                    echo $phrase;
                    echo "Utiliser $langage1 et $langage2 pour faire un site dynamique <br>";
                    
                    
                    ?>


                </p>

        

            </div><!--/col  -->




        </div><!-- /row -->
        

        <?php 
        require("../inc/footer.inc.php");
        ?> 

    </main><!-- /main -->

    <!-- script bootstrap/popper/jquery dependencies -->
   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="jquery/jquery-3.5.1.js"></script>
    <script src="jquery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

