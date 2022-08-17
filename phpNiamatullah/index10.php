<?php

// What is if Else Statement

// if(condition True){
//     Statement for TRUE
// }else{
//     Statement for FALSE 
// }

// $x = 55;

// if($x > 30){
//     echo "X is Greater";
// }else{
//     echo "X is Smaller";
// }

// $y = 10;

// if($y > 15){
//     echo "echo";
// }else{
//     echo "graphie";
// }

// ::::::::::::::::::::::::::::::::::::::::::::

// $x = 10;

// if($x == 100){
//     echo "X is same";
// }else{
//     echo "X is not same";
// }


// --------------------------------

$a = "101011"; // déclarer le code binaire
$arr = str_split($a); // convertir la variable 'string' en 'array
$arReverse = array_reverse($arr); // inverser le tableau car le binaire se lit de droite à gauche
print_r($arReverse); // osef

// utilisation de la boucle FOR pour la conversion binaire -> decimal
for($i = 0; $i < sizeof($arReverse); $i++){
    $b = 2; // initialisation d'une variable = 2 car le binaire sur base sur 2
    $c += $b ** $i * $arReverse[$i];
    // incrementation pour afficher le résultat au dernier tour de la boucle
    echo '<br>' . $c;
}

$b = 54;



?>