<!doctype html>
<?php


?>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Cours PHP 7 - Introduction</title>
  </head>
  <body>
  <?php  include("inc/navbar.inc.php");?>


    <!-- ============= NAV ============ -->
    <div class="container jumbotron">
        <h1 class="display-4">Cours PHP 7 - Introduction</h1>
        <p class="lead">PHP signife aujourd'hui php Prepocessor</p>
        <p>It uses utility classes for typography and spacing to spac content out within larger container</p>
        <a href="#" role="button" class="btn btn-primary btn-lg">learn more</a>
    </div>
    <!-- ============= Conteu principl ============ -->
    <main class="container">
        <div class="row">
            <div class="col-sm-12">
                <p>Pour parvenir à la réalisation de sites dynamique nous allons aborder successivement les points suivants :</p>
                <ul>
                    <li>La syntaxe et les caractéristiques du langage PHP 7</li>
                    <li>Les notions essentielles du langage SQL permettant la création et la gestion d'une BDD et la réalisation des requêtes de base</li>
                    <li>Le fonctionnement et la réalisation de BDD MySQL et les moyens d'y accéder à l'aide de fonctions spécialisées de PHP (ou d'objets)</li>
                </ul>
            </div>
            <div class="col-sm-12">
            <p>PHP  permet  en  outre  de  créer  des  pages  interactives.  Une  page  interactive permet  à  un  visiteur  de  saisir  des données  personnelles.  Ces  dernières  sont ensuite transmises au serveur, où elles peuvent rester stockées dans une base de données pour être diffusées vers d'autres utilisateurs. Un visiteur peut, par exemple, s'enregistrer et retrouver une page adaptée à ses besoins lors d'une visite ultérieure. Il peut aussi envoyer des e-mails et des fichiers sans avoir à passer par son logiciel de messagerie. En associant toutes ces caractéristiques, il est possible de créer aussi bien des sites de diffusion et de collecte d'information que des sites d'e-commerce, de rencontres ou des blogs.</p>
            </div>
            <div class="col-sm-12">
            <p>Pour contenir la masse d'informations collectées, PHP s'appuie généralement sur une base de données, généralement MySQL mais aussi SQLite, et sur desserveurs Apache. PHP, MySQL et Apache forment d'ailleurs le trioultradominant sur les serveurs Internet. Quand ce trio est associé sur un serveur à Linux, on parle de système LAMP (Linux, Apache, MySQL, PHP).PHP est utilisé aujourd'hui par plus des trois quarts des sites dynamiques dela planète et par les trois quarts des grandes entreprises françaises. Pour unserveur Windows, on parle de système WAMP, mais ceci est beaucoup moins courant.</p>
            </div>
        </div>
        <!-- new row -->
        <div class="row">
            <div class="col-sm-12">
                <a href="00-pages/01-pages.php" class="btn btn-secondary btn-sm bm-2"role="button">Une page php</a>
            </div>
        </div>
        <!-- fin row -->
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <p>Avec le code suivant écrit dans un fichier nommé infos.PHP placé sur le serveur d'évaluation on obtinet toutes les infos sur le php exécuté dans ce serveur.</p>
                <blockquote class="border border-warning w-50 p-2">
                     <code>
                        &lt;?php <br>
                        phpinfo();<br>
                        ?>
                     </code>
                </blockquote>
            </div>
            <div class="col-sm-12 col-md-6">
            <?php
            echo "<h3>Aujoudh'hui nous somme le ". date('d/m/y')."</h3>";
            echo "<h4> Bienvenue sur le cours PHP 7</h4>";
            ?>
            <blockquote class="border border-warning w-50 p-2">
                <code>&lt;?php
					echo "&lt;?h3> Aujourd'hui le ". date('d/m/Y - H:m:s')."&lt;?/h3>&lt;?hr>";
					echo "&lt;?h2>Bienvenue sur le site PHP 7"&lt;/h2>";
					&lt;?></code>
			</blockquote>

            </div>
            <hr>
            <h5>Le cycle de vie d'une page PHP</h5>
            <ul>
            <li>Envoi d'une requête HTTP par le navigateur client vers le serveur du type <a href="www.monserveur.fr.page.php">www.monserveur.fr.page.php</a></li>
            <li>Interprétation par le serveur du code PHP contenu dans la page appelée</li>
            <li>Envoi par le serveur d'un fichier dont le contneu est purement HTML</li>
            </ul>
        </div><!-- /col -->
        <!-- new row -->
        <div class="row">
        <div class="col-sm-12">
        <h2>Inclure des fichiers externes</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Fonction</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>include("nom_fichier.php")</td>
                        <td>Lors de son interprétation par le serveur, cette ligne est remplacée par tout le contenu du fichier précisé en paramètre, dont vous fournissez le nom et éventuellement l'adresse complète. En cas d'erreur, par exemple si le fichier n'est pas trouvé, include() ne génère qu'une alerte (un warning), et le script continue.</td>
                    </tr>
                    <tr>
                        <td>require("nom_fichier.php")</td>
                        <td>A désormais un comportement identique à include(), à la différence près qu'en cas d'erreur, require() provoque une erreur fatale et met fin au script.</td>
                    </tr>
                    <tr>
                        <td>include_once("nom_fichier.php")<br>require_once("nom_fichier.php")</td>
                        <td>Contrairement aux deux précédentes, ces fonctions ne sont pas exécutées plusieurs fois, même si elles figurent dans une boucle ou si elles ont déjà été exécutées une fois dans le code qui précède.</td>
                    </tr>

                </tbody>
            </table>
        </div><!-- /col -->
        </div><!-- /row -->
    </main>
    <!-- script bootstrap/popper/jquery dependencies -->
    <script src="jquery/jquery-3.5.1.js"></script>
    <script src="jquery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

