<!doctype html>
<?php  
require_once '../inc/functions.php';

$chaine = "Longtemps je me suis coiuché... dans le temps";
$decimal = "18.74";
$entier = 500;
$liberte = "liberté";
$egalite = "égalité";
$fraternité = "fraternité";






?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <title>Cours PHP 7 - Introduction</title>
  </head>
<body>
    <?php 
    include '../inc/navbar.inc.php';
    
    ?>
    
    <!-- ============= NAV ============ -->
    <div class="container jumbotron">
        <h1 class="display-4">Cours PHP 7 - Exos</h1>
    </div>
    <!-- ============= Conteu principl ============ -->
    <main class="container">

    <?php 
    echo "<p class=\"note note-secondary\">version 1 se présente comme ceci</p>";
    dayOfweek_v1();
    echo "<hr>";
    echo "<p class=\"text-primary\">version 2 se présente comme ceci</p>";
    dayOfweek_v2();
    echo "<hr>";
    // cette fonction permet d'analyser dans le navigateur le contenu et le type d'une variable
    var_dump("<br>".$decimal);
    echo "<hr>";
    print_r(" affiche du contenu avec la fonction print_r <br>");
    // gettype
    echo "<p>gettype \$chaine</p>";
    echo gettype($chaine);

    // liberté, égalité, fraternité
    echo"<p class=\"alert alert-info \">la devise de la république française est : \"$liberte, $egalite, $fraternité\"</p>";

    //min exo il else si le prix est supérieur à 100 euros la remise est de 5% et donner le montant du prix net
    $prix = 55;
    $discount1 = $prix* 0.09;
    $discount2 =  $prix* 0.95;
    // echo discount

    if($prix > 100) {
        echo "Pour un achat de $prix  euros avez une remise de 10% : prix net = $discount1 euros";
    } else {
        echo "Pour un achat de $prix  euros avez une remise de 5% : prix net = $discount2 euros";
    }
    // exo
    // Si vous achetez un pc à plus de 1000 euros, la remise est de 15%
    // pour un PC de 1000 euros et moins la remise est de 10%
    // si c'est un livre la remise est de 5%
    // pour tous les autres articles articles, la remise est de 2%
    // if elseif else: (si c'est un PC
    //                  le prix est sup ou egal à 1000, la remise est de 15%, 
    //                    sinon la remise est de 10% SINON SI C'est )

    echo "<hr>";
    $cat="PC";
    $prix=1200;
    if($cat=="PC")
    
    {  if($prix >= 1000) 
        {   echo "<b>Pour l'achat d'un PC d'un montant de $prix &euro;, la remise est de 15 %</b><br />";
            echo "<h3 class=\"alert alert-success\"> Le prix net est de : ",$prix*0.85, "&euro; </h3>";  
        }  else {
                echo "<p>Pour l'achat d'un PC d'un montant de $prix &euro;, la remise est de 10 %</p><br />";
                echo "<h3 class=\"alert alert-success\"> Le prix net est de : ",$prix*0.90, "&euro; </h3>";
                }
            }
                elseif($cat=="Livres") {  
                    
                    echo "<b>Pour l'achat de livres la remise est de 5 %</ b><br />";
                    echo "<h3> Le prix net est de : ",$prix*0.95, "&euro; </h3>";
                }else {
                    echo"<b>Pour les autres achats la remise est de 2 %</ b><br />";  echo "<h3> Le prix net est de : ",$prix*0.98, "&euro; </h3>";}
        echo"<hr>";
        $cat = "PC";
    $prix = 500;
    if ($cat == "PC") {
        if ($prix >= 1000) {
            echo "Prix du produit $prix € : la remise est de 15% : prix net de votre commande : " .$prix*0.85. " €" ;
        } else {
        
            echo "Prix du produit $prix € : la remise est de 10% : prix net de votre commande : " .$prix*0.90. " €";
            } 
        } else if ($cat == "Livre") {
            echo "Prix du produit $prix € : livre remise 5% : prix net de votre commande : " .$prix*0.95. " €";
        } else {
            echo "Prix du produit $prix € : remise 2 % : prix net de votre commande : " .$prix*0.98. " €";
        }
        echo"<hr>";

        $achat = "livre";
        $prixAchat = 1200;
        // remise de 15%
        $remise15 = $prixAchat*0.85;
         // remise de 10%
        $remise10 = $prixAchat*0.9;
         // remise de 5%
        $remise5 = $prixAchat*0.95;
        // remise de 2%
        $remise2 = $prixAchat*0.98;
        if ($achat == 'PC'){
                if($prixAchat > 1000){
                //remise de 15%
                echo "Vous avez acheté un PC à $prixAchat €, vous bénéficiez donc d'une remise de 15%. Vous paierez $remise15 €";
                }else {
                //remise de 10%
                echo "Vous avez acheté un PC à $prixAchat €, vous bénéficiez donc d'une remise de 10%. Vous paierez $remise10 €";
                }
            }elseif ($achat == 'livre'){
                //remise de 5%
                echo "Vous avez acheté un livre à $prixAchat €, vous bénéficiez donc d'une remise de 5%. Vous paierez $remise5 €";
            }else {
                //remise de 2%
                echo "Vous avez acheté un produit à $prixAchat €, vous bénéficiez donc d'une remise de 2%. Vous paierez $remise2 €";
            }


           /**
                 * Vendredi 12/03
                 * 
                 * Les boucles
                 */
                // boucles WHILE
                //les boucles sont destinées à répeter du code de façon  automatique 
                $i = 0;
                while($i < 25) { // tant que c'est inférieur à 25 on incrémente $i
                    echo $i. " **";
                    $i++;
                }
                echo "<hr>";
                //mini exo 5
                //dans une boucle faire les options d'un élément select en démarrant à 1920 et en s'arrêtant 2021
                $annee = 1920;
                echo "<label for=\"annee\">Année</lable><select name=\"annee\">";
                while($annee <= 2021) {
                    echo  "<option>" .$annee. "</option>";
                    $annee++;
                }
                echo "</select>";

                echo "<br>";
                echo "<hr>";

                // mini exo 
                // la même chose à rebours 
                $annee2 = 2021;
                echo "<label for=\"annee\">Année</lable><select name=\"annee\">";
                while($annee2 >= 1920) {
                    echo  "<option>" .$annee2. "</option>";
                    $annee2--;
                }
                echo "</select>";
                echo "<br>";
                echo "<hr>";

                //  DO WHILE  

                $chamalow = 0;
                do {
                    echo "<p class=\"alert alert-info\">je fais un petit tour de boucle </p>";
                    $chamalow++;
                }

                while( $chamalow > 10 ); // la condition renvoie FALSE tout de suite, pourtant la boucle a tournée une fois

                //mini exo 7 
                // si la variable $langue contient espagnol vous dites hola,
                // si c'est anglais vous dites hello si c'est fr bonjour


                $lang = "Français";
                switch ($lang){
                    case "Français" : 
                        echo "Bonjour"; 
                        break;
                    case "Anglais" : 
                        echo "Hello"; 
                        break;
                    case "espagnol" : 
                        echo "Hola"; 
                        break;
                    default: 
                        echo "cette langue n'existe pas !"; 
                        break;
                }


                echo "<br>";
                echo "<hr>";
            


            //  ré-écrire ce switch avec if else if ...

                $lang = "anglais";
                $francais = "bonjour";
                $espagnol = "hola";
                $anglais = "hello i am english";
                
    
                if($lang == "francais") {
                    echo $francais;
                } elseif ($lang == "espagnol") {
                    echo $espagnol;
                }elseif ($lang== "anglais"){
                    echo $anglais;
                }else {
                    echo " langue inexistante";
                }

                // la boucle FOR
                // afficher les mois de 1 à 12 à l'aide d'une boucle for dans un menu déroulant

                for ($i=0; $i<=12; $i++) {


                }

                // $mois = array(1 =>"Janvier", 2=>"Fevrier",3=>"Mars",4=>"Avril",5=>"Mai",6=>"Juin",7 =>"Juillet", 8=>"Aout",9=>"Septembre",10=>"octobre",11=>"Novembre",12=>"Decembre",);
                // echo "<label for=\"mois\">mois</lable><select name=\"mois\">";
                // for($mois = 1; $mois <= 12; $mois++) {
                //    echo  "<option>" .$mois. "</option>";
                //}
                // }
                // echo "</select>";

                
                echo "<label for=\"mois\">Les mois</lable><select>";
                for($mois = 1; $mois <= 12; $mois++) {
                    echo  "<option>" .$mois. "</option>";
                }
                echo "</select>";
                
                echo "<br>";
                echo "<br>";
                echo "<hr>";
                //mini exo
                //faire une boucle for qui affiche 0 à  9 sur la même ligne
                //compléter cette boucle pour mettre les chiffres dans un tableau HTML 
                //création d'un autre tableau
                echo "<table class=\" table  table-striped\"><tr>";
                for($i=0; $i<=9; $i++){
                    echo " <td class=\"alert alert-info\">$i</td>";
                }
                echo "</tr></table>";



                
?>
                <section class="mt-5">
                <div class="row">
                    <div class="col-sm-12">
                <pre>
                $francais = "bonjours";
                $espagnol = "hola";
                $anglais = "hello";
                $lang = "anglais";
    
                if($lang === "francais") {
                    echo $francais;
                } elseif ($lang === "espagnol") {
                    echo $espagnol;
                }elseif ($lang=== "anglais"){
                    echo $anglais;
                }else {
                    echo " langue inexistante";
                }
                </pre>
    
                    </div>
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4"></div>

                </div>
            
            </section>


    </main>
    <!-- script bootstrap/popper/jquery dependencies -->
   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="jquery/jquery-3.5.1.js"></script>
    <script src="jquery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

