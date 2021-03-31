<?php 
require_once 'inc/init.php';
//jeprint_r($_POST);
if ( !empty($_POST) ) {//Si form pas vide 
    jeprint_r($_POST);
    if (!isset($_POST['pseudo']) || strlen($_POST['pseudo']) < 4 || strlen($_POST['pseudo']) > 20 ) {
        $contenu .='<div class="alert alert-danger">Le pseudo doit contenir entre 4 et 20 caractères.</div>';// Si indice pseudo inf à 4 caractère ou sup à 20 on affiche ce message
    }//Fin !isset($_POST['pseudo']
    if (!isset($_POST['mdp']) || strlen($_POST['mdp']) < 4 || strlen($_POST['mdp']) > 20 ) {
        $contenu .='<div class="alert alert-danger">Le mot de passe doit contenir entre 4 et 20 caractères.</div>';
    }//Fin !isset($_POST['mdp']
    if (!isset($_POST['nom']) || strlen($_POST['nom']) < 2 || strlen($_POST['nom']) > 20 ) {
        $contenu .='<div class="alert alert-danger">Le nom doit contenir entre 4 et 20 caractères.</div>';
    }//Fin !isset($_POST['nom']
    if (!isset($_POST['prenom']) || strlen($_POST['prenom']) < 2 || strlen($_POST['prenom']) > 20 ) {
        $contenu .='<div class="alert alert-danger">Le prénom doit contenir entre 4 et 20 caractères.</div>';
    }//Fin !isset($_POST['prenom']
    if (!isset($_POST['email']) || strlen($_POST['email']) > 50 || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
        $contenu .='<div class="alert alert-danger">Votre email n\'est pas conforme.</div>';// filter_var -> filtre de variable // Dans ce filtre on passe la fonction prédéfinie FILTER_VALIDATE_EMAIL (c'est une constante elle est écrite en MAJUSCULE) cette fonction vérifie que le format est bien de format email
    }//Fin !isset($_POST['email']
    if (!isset($_POST['civilite']) || $_POST['civilite'] !='m' && $_POST['civilite'] != 'f' ) {
        $contenu .='<div class="alert alert-danger">La civilité n\'est pas valable.</div>';//est-ce que j'ai f ou m dans $_POST sinon j'affiche le message
    }//Fin !isset($_POST['civilite']
    if (!isset($_POST['adresse']) || strlen($_POST['adresse']) < 4 || strlen($_POST['adresse']) > 60 ) {
        $contenu .='<div class="alert alert-danger">l\'adresse est-elle complète ? .</div>';
    }//Fin !isset($_POST['adresse']
    if (!isset($_POST['code_postal']) || !preg_match( '#^[0-9]{5}$#', $_POST['code_postal']) ) {//est-ce que le code postal correspond à l'expression régulière précisée : la "regex" regular espression
        $contenu .='<div class="alert alert-danger">Vérifiez le nom de votre ville.</div>';
    }
    if (!isset($_POST['ville']) || strlen($_POST['ville']) < 1 || strlen($_POST['ville']) > 20 ) {
        $contenu .='<div class="alert alert-danger">Vérifier le nom de votre ville.</div>';
    }//Fin !isset($_POST['prenom']
    if (empty($contenu)) { // si la variable est vide c'est qu'il n'y a pas d'erreurs sur le form
        $membre = executeRequete ( " SELECT * FROM membre WHERE pseudo = :pseudo",
                                    array(':pseudo' => $_POST['pseudo']));
            if ($membre->rowCount() > 0) { // si la requête retourne des lignes c'est que le pseudo existe déjà
                $contenu .= '<div class="alert alert-danger">le pseudo est indisponible veuillez en choisir un autre</div>';
            } else { // si on inscrit le membre dans la BDD
                $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);// cette fonction prédéfinie permet de hasher le mot de passe selon l'algorithme actuel "bcrypt".  Il faudra lors de la connexion comparer le hash de la BDD avec celui du mdp de l'intérieur
                $succes = executeRequete(" INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, adresse, code_postal, ville,  statut) VALUES (:pseudo, :mdp, :nom, :prenom, :email, :civilite, :adresse, :code_postal, :ville,  0)", 
                array(
                    ':pseudo' => $_POST['pseudo'],
                    ':mdp' => $mdp, //on prend le mot de passe hashé
                    ':nom' => $_POST['nom'],
                    ':prenom' => $_POST['prenom'],
                    ':email' => $_POST['email'],
                    ':civilite' => $_POST['civilite'],
                    ':adresse' => $_POST['adresse'],
                    ':code_postal' => $_POST['code_postal'],
                    ':ville' => $_POST['ville'],
            ));
            if ($succes) {
                $contenu .= '<div class="alert alert-success">Vous êtes inscrit <a href="connexion.php">Cliquez ici pour vous connecter</a></div>'; 
            } else {
                $contenu .= '<div class="alert alert-danger">Erreur lors de l`\enregistrement !</div>';
            }//fin du if if if ($succes)
            }//Fin de if else vérification du membre ou inscription
    } // Fin if empty($contenu)
}// Fin if !empty($_POST)
?> 
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Le site - Inscription</title>
    <!-- Mes styles -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <div class="jumbotron container">
        <h1 class="display-4 text-center">Le site - Inscription</h1>
        <p class="lead"></p>
        <hr class="my-4">
    </div>
    <main class="container bg-white">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center border border-success border-5 m-2 px-2">Le site - Inscrivez-vous !</h1>
                <?php echo 'coucou';?> 
                
                <form action="" class="border border-success border-5 m-2 px-2" methode="POST">
                    <div class="form-group">
                        <label for="pseudo">Choisissez un pseudo *</label>
                        <input type="text" name="pseudo" class="form-control" id="pseudo" value="<?php echo $_POST['pseudo'] ?? ''; ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="mdp">Mot de passe *</label>
                        <input type="password" name="mdp" class="form-control" id="mdp" value="">
                        <small class="bg-warning">Votre mot de passe doit contenir entre 4 et 20 caractère</small>
                    </div>
                    <div class="form-group mt-2">
                        <label for="nom">Nom *</label>
                        <input type="text" name="nom" class="form-control" id="nom" value="<?php echo $_POST['non'] ?? ''; ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="prenom">Prénom *</label>
                        <input type="text" name="prenom" class="form-control" id="prenom" value="<?php echo $_POST['prenom'] ?? ''; ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email *</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?php echo $_POST['email'] ?? ''; ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="sexe">Civilite *</label>
                        <input type="radio" name="sexe" value="m" checked>Homme
                        <input type="radio" name="sexe" value="f" <?php if (isset($_POST['civilite']) && $_POST['civilite'] =='f') echo 'checked';?>>Femme
                    </div>
                    <div class="mb-3 form-group mt-2">
                        <label for="adresse" class="form-label" require>Adresse *</label>
                        <textarea class="form-control" name="adresse" id="adresse" cols="30" rows="5" value="<?php echo $_POST['adresse'] ?? ''; ?>"></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="code_postal">Code postal *</label>
                        <input type="text" name="code_postal" class="form-control" id="code_postal" value="<?php echo $_POST['code_postal'] ?? ''; ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="ville">Ville *</label>
                        <input type="text" name="ville" class="form-control" id="ville" value="<?php echo $_POST['ville'] ?? ''; ?>">
                    </div>
                    <div class="form-group mt-2">
                        <input type="submit" value="S'inscrire" class="btn btn-success">
                        <input type="reset" value="effacer" class="btn btn-primary">
                    </div>
                </form>
            </div><!-- Fin de col -->
            <div class="col-sm-12">
            </div><!-- Fin de col -->
        </div><!-- Fin de row -->
    </main>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>