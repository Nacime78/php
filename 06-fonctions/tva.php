<?php
// exercice avec une fonction qui va calculer la TVA pour un prix HT
// on va compliquer cette fonction au fur et à mesure pour la rendre intéressante

// fonction qui n'attend pas de paramètre

function calculTva(){
    // return permet de conserver en mémoire un résultat, récupérable ensuite dans notre code
    return 100 * 1.2 . '€ TTC';
}

// j'exécute en affichant le résultat (conservé dans le return)
echo calculTva() . '<br>';

// étape 1, elle devra recevoir le prix en argument, puis elle calculera le prix en TTC
// objectif. La fonction est capable de calculer le prix TTC de n'importe quel chiffre et pas juste 100

function calculTva2($prix){
    // return permet de conserver en mémoire un résultat, récupérable ensuite dans notre code
    return $prix * 1.2 . '€ TTC';
}

echo calculTva2(75) . '<br>';

// étape 2. La fonction doit à présent calculer un prix en TTC en fonction de deux arguments qu'on doit lui donner. Le prix TH, mais aussi quel taux de TVA appliquer au prix HT

function calculTva3($prix, $tva){
    return $prix * $tva . '€ TTC';
}

echo calculTva3(100, 1.055) . '<br>';

// ------------------------------

// fonction intelligente, si la TVA n'est pas définie, le taux de 20% est automatiquement appliqué
function calculTva4($prix, $taux = 1.2){
    return $prix * $taux . '€ TTC';
}

echo calculTva4(100) . '<br>'; // tva à 20% par défaut
echo calculTva4(100, 1.055) . '<br>'; // tva à 1.055, ce dernier va écraser le taux par défaut défini dans les paramètres de la fonction