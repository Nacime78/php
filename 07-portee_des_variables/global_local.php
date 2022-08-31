<?php
// les variables déclarées dans l'un des deux espaces ne sont pas reconnues automatiquement dans l'autre espace

// du global vers le local
// ci dessous, la variable $pays déclarée dans l'espace global ne sera pas reconnue dans l'espace local (dans la fontion) si je n'utilise pas le mot clé global pour importer ma variable dans l'eapce local (ligne 11). Sinon, undefined variable $pays

$pays = "France";

function affichePays(){
    global $pays;
    echo $pays;
}

echo affichePays() . "<br>";

// du local vers le global

function afficheJour(){
    $jour = "mercredi";
    // pour récupérer la valeur de la variable $jour dans mon espace global (ligne 25), je dois utiliser le mot clé return, sinon, même erreur undefined variable $jour
    return $jour;
    // la ligne en dessous ne s'affichera pas car tout ce qui est codé après un return n'est pas exécuté
    echo "Demain nous serons jeudi";
}

echo afficheJour() . "<br>";