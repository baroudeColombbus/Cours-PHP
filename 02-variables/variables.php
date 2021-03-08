<!doctype html>
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
    <!-- ============= NAV ============ -->
    <div class="container jumbotron">
        <h1 class="display-4">Cours PHP 7 - varibales</h1>
        <p class="lead">Une variable est le conteneur d'une valeur d'un des types utilisés par PHP (entiers, flottants, chaînes de caractères, tableaux, booléens, objets, ressource ou NULL).</p>
        <a href="#" role="button" class="btn btn-primary btn-lg">learn more</a>
    </div>
    <!-- ============= Conteu principl ============ -->
    <main class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>1-Les variables</h2>
                <p>Chaue variable possède un identifiant particulier, qui commence toujours par le caractère dollar ($)suivi du nom dela variable. Les règles de création des noms de variables sont les suivantes : </p>

                <ol>
                    <li>Le nom commence par un caractère alphabétique, pris dans les ensembles [a-z], [A-Z] ou par le caractère de soulignement (_).</li>
                    <li>Les caractères suivants peuvent être les mêmes plus des chiffres.</li>
                    <li>a longueur du nom n'est pas limitée, mais il convient d'être raisonnable sous peine de confusion dans la saisie du code. Il est conseillé de créer des noms de variable le plus « parlant » possible. En relisant le code contenant la variable $nomclient, par exemple, vous comprenez davantage ce que vous manipulez que si vous aviez écrit $x ou $y.</li>
                </ol>

            </div><!-- /col -->
            <!-- new col -->
            <div class="col-sm-12">
            <li>La déclaration des variables n'est pas obligatoire en début de script. C'est là une différence notable avec les langages fortement typés comme Java ou C. Vous pouvez créer des variables n'importe où, à condition bien sûr de les créer avant de les utiliser, même s'il reste possible d'appeler une variable qui n'existe pas sans provoquer d'erreur.</li>
            <li>L'initialisation des variables n'est pas non plus obligatoire et une variable non initialisée n'a pas de type précis.</li>
            <li>Les noms des variables sont sensibles à la casse (majuscules et minuscules). $mavar et $MaVar ne désignent donc pas la même variable.</li>

            </div><!-- /col -->
            <!-- new col -->
            <div class="col-sm-12">
            <h2>2-Les noms de variables suivants sont corrects</h2>
							<ul>
								<li>$mavar</li>
								<li>$_mavar</li>
								<li>$mavar2</li>
								<li>$M1</li>
								<li>$_123</li>
							</ul>
							<h3>Les noms de variables suivants sont illégaux</h3>
							<ul>
								<li>$*mavar</li>
								<li>$5_mavar</li>
								<li>$mavar2+</li>
							</ul>
            </div><!-- /col -->
        </div><!-- /row -->
        <!-- new row -->
        <div class="row">
            <div class="col-sm-12">
                <p>L'affectation consiste à donner une valeur à une varibale. Lors de la création d'une variable, vous ne déclarez pas son type. C'est la valeur que vous lui affectez qui détermine ce type. Dans PHP, vous pouvez affecter une variable par valeur ou par référence.</p>
                <p>Exemples : </p>
                <ul>
                    <li>$mavar=75;</li>
                    <li>$mavar="Paris";</li>
                    <li>$mavar=7*3+2/5-91%7; //PHP évalue l'expression puis affecte le résultat </li>
                    <li>$mavar=mysql_connect($a,$b,$c); //la fonction retourne une ressource </li>
                    <li>$mavar=isset($var&&($var==9)); //la fonction retourne une valeur booléenne</li
                </ul>

            </div>
        </div><!-- /row -->
        <!-- new row -->
        <div class="row">
            <div class="col-sm-12">
                <h2>3-Les variables prédéfinies</h2>
                <p>PHP dispose d'un grand nombre de variables préféfinies, qui contient des informations à la fois sur le serveur et sur toutes les données qui peuvent transiter le poste et le serveur, comme les valeurs saisies dans un formulaire, les cookies ou des les sessions</p>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Variable</th>
                            <th scope="col">Utilisation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">$GLOBALS</th>
                            <td>Contient le nom et la valeur de toutes les variables globales du script. Les noms des variables sont les clés de ce tableau. $GLOBALS["mavar"] récupère la valeur de la variable $mavar en dehors de sa zone de visibilité (dans les fonctions, par exemple).</td>
                        </tr>
                        <tr>
                            <th scope="row">$_COOKIE</th>
                            <td>Contient le nom et la valeur des cookies enregistrés sur le poste client. Les noms des cookies sont les clés de ce tableau (voir le chapitre 13).</td>
                        </tr>
                        <tr>
                            <th scope="row">$_ENV</th>
                            <td>Contient le nom des fichiers téléchargés à partir du poste client.</td>
                        </tr>
                        <tr>
                            <th scope="row">$_FILES</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">$_SERVER</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">$_GET</th>
                            <td>Contient le nom et la valeur des données issues d'un formulaire envoyé par la méthode GET. Les noms des champs du formulaire sont les clés de ce tableau. </td>
                        </tr>
                        <tr>
                            <th scope="row">$_POST</th>
                            <td>Contient le nom et la valeur des données issues d'un formulaire envoyé par la méthode POST. Les noms des champs du formulaire sont les clés de ce tableau.</td>
                        </tr>
                        <tr>
                            <th scope="row">$_REQUEST</th>
                            <td>Contient l'ensemble des variables superglobales $_GET, $_POST, $_COOKIE et $_FILES.</td>
                        </tr>
    
                        <tr>
						<th scope="row">$_SERVER</th>
						<td>Contient les informations liées au serveur web, tel le contenu des en-têtes HTTP ou le nom du script en cours d'exécution. Retenons les variables suivantes :
						<ul>
							<li>
								$_SERVER["HTTP_ACCEPT_LANGUAGE"], qui contient le code de langue du
								navigateur client.
							</li>
							<li>
								$_SERVER["HTTP_COOKIE"], qui contient le nom et la valeur des cookies lus sur
								le poste client.
							</li>
							<li>$_SERVER["HTTP_HOST"], qui donne le nom de domaine.</li>
							<li>$_SERVER["SERVER_ADDR"], qui indique l'adresse IP du serveur.</li>
							<li>
								$_SERVER["PHP_SELF"], qui contient le nom du script en cours. Nous l'utiliserons souvent dans les formulaires.
							</li>
							<li>
								$_SERVER["QUERY_STRING"], qui contient la chaîne de la requête utilisée pour accéder au script.
							</li>
						</ul>
						</td>
					</tr>
                        <tr>
                            <th scope="row">date  setlocale()strftime()</th>
                            <td><?php
                            setlocale(LC_ALL, 'fr_FR');

                            echo strftime("%A %e %B %Y");
                            ?> </td>
                        </tr>
                        <tr>
                            <th scope="row">$_SESSION</th>
                            <td>Contient l'ensemble des noms des variables de session et leurs valeurs</td>
                        </tr>
                    </tbody>

                </table><!-- /table -->
            </div><!-- /col -->

            <div class="col-sm-12">
                <h2>4-Les opérateurs d'affectation combinés</h2>
                <p>En plus de l'opérateur classique d'affectation =, il existe plusieurs opérateurs d'affactation combinée. Ces opérateurs réalisent à la fois une opération entre deux opérandes et l'affectation du résultat à l'opérande de gauche</p>

                <table class="table table-striped">
					<thead>
						<tr>
                            <th scope="col"class="text-info">Opérateur</th>
                            <th scope="col"class="text-info">Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">+=</th>
							<td>Addition puis affectation :<br>
								$x += $y équivaut à $x = $x + $y<br>
								$y peut être une expression complexe dont la valeur est un nombre.</td>
						</tr>
						<tr>
							<th scope="row">-=</th>
							<td>Soustraction puis affectation :<br>
								$x -= $y équivaut à $x = $x - $y<br>
								$y peut être une expression complexe dont la valeur est un nombre.</td>
						</tr>
						<tr>
							<th scope="row">*=</th>
							<td>Multiplication puis affectation :<br>
							$x *= $y équivaut à $x = $x * $y<br>
							$y peut être une expression complexe dont la valeur est un nombre.</td>
						</tr>
						<tr>
							<th scope="row">**=</th>
							<td>Puissance puis affectation<br>
							$x**=2 équivaut à $x=($x)²</td>
						</tr>
						<tr>
							<th scope="row">/=</th>
							<td>Division puis affectation :<br>
							$x /= $y équivaut à $x = $x / $y<br>
							$y peut être une expression complexe dont la valeur est un nombre différent de 0.</td>
						</tr>
						<tr>
							<th scope="row">%=</th>
							<td>Modulo puis affectation :<br>
								$x %= $y équivaut à $x = $x % $y $y<br>
								$y peut être une expression complexe dont la valeur est un nombre.</td>
						</tr>
						<tr>
							<th scope="row">.=</th>
							<td>Concaténation puis affectation :<br>
								$x .= $y équivaut à $x = $x . $y<br>
								$y peut être une expression littérale dont la valeur est une chaîne de caractères.</td>
						</tr>
					</tbody>
					</table>
                </div><!-- /col -->

                <div class="col-sm-12">
                    <h2>5- Les constant</h2>
                    <p>Vous serez parfois amené à utiliser de manière répétitive des informations devant rester constantes dans toutes les pages d'un même site. Il peut s'agir de texte ou de nombres qui reviennent souvent. Pour ne pas risquer l'écrasement accidentel de ces valeurs, qui pourrait se produire si elles étaient contenues dans des variables, vous avez tout intérêt à les enregistrer sous forme de constantes personnalisées.</p>
					<p>On peut définir ses constantes soi-même cf. ; Pour définir des constantes personnalisées, utilisez la fonction define(), dont la syntaxe est la suivante : <strong>boolean define(string nom_cte, divers valeur_cte, boolean casse)</strong> Voir la page <a href="/02-variables/03-page.php">suivante</a></p>
                </div><!-- /col -->

                <div class="col-sm-12">
                    <h2>6- Les contantes prédefinies</h2>
                    <p>Il existe dans PHP un grand nombre de constantes prédéfinies, que vous pouvez notamment utiliser dans les fonctions comme paramètres permettant de définir des options. Nous ne pouvons les citer toutes tant elles sont nombreuses, mais nous les définirons au fur et à mesure de nos besoins. Voir la page <a href="/02-variables/04_constantes_predefinies.php">avec un exemple</a></p>
                    <table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Constantes</th>
								<th scope="col">Résultat</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<th scope="row">PHP_VERSION</th>
							<td>Version de PHP installé sur le serveur : <br>
                            <?php 
                                echo "<p>Version de PHP installé sur le serveur : ".PHP_VERSION."</p>"
                            ?>
                            
                            </td>
							</tr>
							<tr>
							<th scope="row">PHP_OS</th>
							<td>Nom du système d'exploitation du serveur</td>
                            <?php 
                                echo "<p>Nom du système d'exploitation du serveur " .PHP_OS."</p>"
                            ?>
							</tr>
							<tr>
							<th scope="row">DEFAULT_INCLUDE_PATH</th>
							<td>Chemin d'accès aux fichiers par défaut <br>
                            <?php 
                                echo "<p>Chemin d'accès aux fichiersn ".DEFAULT_INCLUDE_PATH."</p>"
                            ?>
                            </td>
							</tr>
							<tr>
							<th scope="row">__FILE__</th>
							<td>Nom du fichier en cours d'exécution: <br>
                            <?php 
                                echo "<p>Nom du fichier en cours d'exécution ".__FILE__." </p>"
                                ?>
                            </td>
							</tr>
							<tr>
							<th scope="row">__LINE__</th>
							<td>Numéro de la ligne en cours d'exécution : <br>
                                <?php 
                                echo "<p>Numéro de la ligne : n° ".__LINE__."</p>"
                                ?>
                            </td>
                            tr>
						</tbody>
					</table>


                </div><!-- /col -->






        </div><!-- /row -->
        <?php 
        require("../inc/footer.inc.php");
        ?> 


        
    </main>
    <!-- script bootstrap/popper/jquery dependencies -->
    <script src="jquery/jquery-3.5.1.js"></script>
    <script src="jquery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

