<?php

// echo "Structure itératives  : les boucles";
// Les boucles sont destinées à répéter des lignes de codes de façon automatique
$annee = date('Y') - 100; // date() fournit la date du jour au format indiqué , ici 'Y' pour Year sur 4 chiffres

// echo '<select>';
// echo '<option> année </option>';
// while ($annee <= date('Y')){
//     echo '<option>' . $annee . '</option>';
//     $annee++;
// }
// echo '</select>';

// DO WHILE ::::::::::::::::::::::::::::::::::::

echo '<select>';
echo '<option> année </option>';
do {
    echo '<option>' . $annee . '</option>';
    $annee++;
} while ($annee <= date('Y'));
echo '</select>';

echo "<h4> La boucle do while </h4>";
// -------------------------------------
// La boucle do while a la particularité de s'exécuter au moins une fois (correspondant à "do") puis tant que la condition while est vraie.

$j = 20;
do{
    echo 'je fais un tour de boucle <br>';
    $j++;
} while ($j < 10);

// Exemple d'utilisation : poser une question à l'internaute une première fois avec le "do", puis tant qu'il n'a pas répondu avec le "while".

// FOR :::::::::::::::::::::::::::::
// La boucle for est une autre syntaxe de la boucle while

echo '<hr>';
for($i = 0; $i < 10; $i++){ // On trouve dans les parenthèses du for : valaur de départ; condition d'entrée dans la boucle; incrémentation ou décrémentation de $i;
    echo $i . "<br>";
}

// Exercice : Afficher 12 <option> de 1 à 12 avec la boucle for

echo '<hr>';

echo '<select>';

for($i = 1; $i <= 12; $i++){
    echo '<option>' . $i . '</option>';
}

echo '</select>';

// Exercice : afficher avec une boucle for les chiffres de 0 à 9 sur la même ligne dans une table HTML

echo '<table style="border: 1px solid black; border-collapse: collapse">';
echo '<tr>';

for($i = 0; $i <= 9; $i++){
    echo '<td style="border: 1px solid black">' . $i . '</td>';
}

echo '</tr>';
echo '</table>';

?>
