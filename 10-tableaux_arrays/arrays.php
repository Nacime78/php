<?php

$listePrenoms = "Inès, Tom, Yann, Aziz, Mathilde"; // non pratique pour une variable quelconque

echo $listePrenoms . '<br>';

$tableauPrenoms = array("Inès", "Tom", "Yann", "Aziz", "Mathilde"); // utilisation pour les tableaux

echo "<pre>"; 
print_r($tableauPrenoms); 
echo "</pre>"; // echo non obligatoire

// var_dump va afficher le length de chaque mot (strlen au lieu de iconv_strlen, affiche la longueur en fonction du nombre d'octet utilisé par la variable)
echo "<pre>";
var_dump($tableauPrenoms); 
echo "</pre>"; // echo non obligatoire

echo $tableauPrenoms[2], $tableauPrenoms[3];

// autre syntaxe pour déclarer un tableau
// elle est plus pratique que la première pour ajouter des éléments au fur et à mesure de notre code, si on ne les connait pas tous au départ

$listePays[] = "France";
$listePays[] = "Italie";
$listePays[] = "Algérie";
$listePays[] = "Espagne";
$listePays[] = "Argentine";

// boucle foreach adapté aux tableaux

foreach ($listePays as $indice => $valeur) {
    echo "<p>La valeur " . $valeur . " a pour indice " . $indice . "</p>";
}

// foreach version ul/li

echo "<ul>";
    foreach ($listePays as $valeur) {
        echo "<li>La valeur " . $valeur . " a pour indice " . $indice . "</li>";
    }
echo "</ul>";

// ----------------------------------

// permet d'afficher le tableau sous forme de chaine de caractère sépare chaque élément avec le 1er argument de la fonction, ici c'est le tiret
echo "<p>" . implode(' - ', $tableauPrenoms) . "</p>";

// count et sizeof
echo count($tableauPrenoms) . '<br>';
echo sizeof($tableauPrenoms) . '<br>';




