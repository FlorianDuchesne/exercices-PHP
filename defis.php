<?php
//Déterminer si une valeur est paire ou impaire . Ex: La valeur 2 est paire ou la valeur 7 est impaire


// Faire une fonction qui divise la variable par deux.
// Si le résultat de la division produit un entier, c'est un chiffre pair.
// Si le résultat de la division produit un nombre à virgule, c'est un chiffre impair.



function ($variable){
    $produit = $variable/2;
    if (is_int($produit)){
        echo "nombre pair";
    }
    else {
        echo "nombre impair";
        }
    }
}

function ($variable){
    $produit = $variable/2;
    }
}


// printemps c'est mars , avril et mai 

// [09:32] Stephane SMAIL - Elan Formation
// m'été c'est juin juillet aout

// [09:33] Stephane SMAIL - Elan Formation
// A partir du mois courant , afficher la saison courante 


switch ($mois) {
    case "mars";
    case "avril";
    case "mai";
        echo "printemps";
        break;
    case "juin";
    case "juillet";
    case "août";
        echo "été";
        break;
    case "septembre";
    case "octobre";
    case "novembre";
        echo "automne";
        break;
    case "décembre";
    case "janvier";
    case "février";
        echo "hiver";
        break;
}

// voir capture écran pour meilleure version

?>