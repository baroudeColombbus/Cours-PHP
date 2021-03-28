<?php 
    if (!empty($_POST)){ // si $_POST n'est pas vide c'est qu'il est rempli et donc que le 

        //jeVarDump($_POST);
    echo "Prenom : <strong>" .$_POST['prenom']. "</strong><br>" ;
    echo "Nom : <strong>" .$_POST['nom']. "</strong><br>" ;
    echo "Email : <strong>" .$_POST['email']. "</strong><br>" ;
    echo "Adresse : <strong>" .$_POST['adresse']. "</strong><br>";
    echo "Code postal : <strong>" .$_POST['codepostal']. "</strong><br>" ;
    echo "Ville: <strong>" .$_POST['ville']. "</strong><br>" ;


    //on va écrire le contenu de la super golbale dans un fichier texte en l'absence de BDD

    $fichier = fopen('formulaire.txt', 'a'); //fopen() en mode "a" permet de créer un fichier s'il n'existe pas encore, sinon cela permet de l'ouvrir
  

    $donneeformualire = $_POST['prenom']. " " .$_POST['nom']. " // email : "  .$_POST['email']. " adresse : " .$_POST['adresse']. " " .$_POST['codepostal']. " " . $_POST['ville']. "\n"; //\n pour faire sauts de ligne dans le .txt
    fwrite ($fichier, $donneeformualire);

}
?> 