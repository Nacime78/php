<?php

// les tableaux associatifs ont été crées pour encore mieux maitriser la création d'un tableau. On peut désormais donner un nom à l'indice, plutôt que de devoir faire un print_r pour connaitre son indice (puis crocheter)

// au moment de déclarer les éléments, je les précède d'un indice dont je vais maitriser le nommage (au lieu de laisser PHP leur donner les indices 0, 1, 2 etc..)

$listeCouleurs = array('j' => 'jaune', 'b' => 'bleu', 'v' => 'vert');

echo "<pre>"; print_r($listeCouleurs); "</pre>";

echo 'La couleur ' . $listeCouleurs['j'] . ' possède l\'indice j <br>';

echo "La couleur $listeCouleurs[b] possède l'indice b <br>";