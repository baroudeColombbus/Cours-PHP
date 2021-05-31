  <!-- navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Boutique</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
    
        <?php

        if(estConnecte()){

            // si membre utilisateur connecté
            echo ' <li class="nav-item"><a class="nav-link" href=" '. RACINE_SITE.'03_profil.php">Profile Test</a></li>';
            echo ' <li class="nav-item"><a class="nav-link" href=" '. RACINE_SITE.'02_connexion.php?action=deconnexion">Deconnexion</a></li>';
        }else {
            // si n'est pas connecter, redirect vers inscription
            echo ' <li class="nav-item"><a class="nav-link" href=" '. RACINE_SITE.'01_inscription.php">Profile Test</a></li>';
            echo ' <li class="nav-item"><a class="nav-link" href=" '. RACINE_SITE.'02_connexion.php">Profile Test</a></li>';
        }
             echo ' <li class="nav-item"><a class="nav-link" href="#">Voir</a></li>';
        if(estAdmin()) {
            echo 'vous etes un administrateur';
           // echo ' <li class="nav-item"><a class="nav-link" href=" '. RACINE_SITE.'admin/gestion_boutique.php">Gestion Boutique</a></li>';
            echo '<a href="'. RACINE_SITE.'admin/index.php">ADMIN Boutique</a>';
        }else {

            echo 'Vous êtes utilisateur';

        }
        
        ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo RACINE_SITE .'index.php' ;?>">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Another link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Bienvenue <?php echo $_SESSION['membre']['prenom']; ?></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown04">
              <li><a class="dropdown-item" href="#">Mon profile</a></li>
              <li><a class="dropdown-item" href="<?php echo RACINE_SITE .'02_connexion.php?action=deconnexion' ?>">Se connecter</a></li>
            </ul>
          </li>
        </ul>
        <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>