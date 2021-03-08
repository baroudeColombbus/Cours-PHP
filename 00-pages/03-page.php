<?php 


define("PI", 3.14159265359, TRUE); // définition insensible à la casse

echo "La constante PI vaut ".PI. "<br>";
echo "La constante PI vaut".pi."<br>";

// vérification de la constante

if(defined("PI")) echo "la constante est déjà définie <br>";


define("monsiteweb", "http://www.rankbooster.fr", FALSE);

echo "l'url de l'agence web rankbooster " .MONsiteweb." <br>";

echo "Visitez le site <a href=\" " .monsiteweb."\" target=\"_blank\" >rankbooster</a>";





?>