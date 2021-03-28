<?php

// première function 

function mnPap() {
    echo "<p class=\"lead\">Bonjour baroude</p>";
}


// mini exo:  faire une fonction qui affiche le jour

function quelJour() {
    "<p class=\"border border-primary p-2 w-50\">We are".date('l'). "</p>";
}

function dayOfweek_v1() {
    setlocale(LC_ALL, 'fr_FR');
    echo "<p class=\"alert alert-success w-50 mx-auto text-center\">Nous sommes ". strftime('%A %e %B %Y') ."</p>";

}

function dayOfweek_v2() {
    setlocale(LC_ALL, 'fr_FR');
    echo "<p class=\"alert alert-success w-50 mx-auto text-center\">Nous sommes ". strftime('%A') ."</p>";

}


// Création d'une fonction pour "var_dump" une variablee
// tres utiles pour un tableau


function jevardump($maVariable) { //la fonction nommée avec son paraétre, une variable
    echo "<pre><span class=\"bg-danger text-white p-2\">..var_dump</span>";
    echo "<p class=\"alert alert-success p-2 \">";
    var_dump($maVariable); //une variable à laquelle on applique la fonction var_dump
    echo "</p></pre>";
}


 //création d'une fonction pour "print_r" une varialble (très utile pour un tableau)
 function jeprint_r($maVariable) { //la fonction nommée avec son paraétre, une variable
    echo "<pre><span class=\"bg-danger text-white p-2\">..print_r</span>";
    echo "<p class=\"alert alert-warning p-2 w-50\">";
    print_r($maVariable); //une variable à laquelle on applique la fonction print_r
    echo "</p></pre>";
}



?>