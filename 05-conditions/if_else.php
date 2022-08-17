<?php

// je déclare 5 variables que je vais tester

$a = 22;
$b = 33;
$c = 44;
$d = 55;
$e = 66;

// if($a < $b){
//     echo "Vrai $a est bien inférieur $b <br>";
// }else{
//     echo "next";
// }

// if($b < $c) // fonctionne
//     echo "Vrai $b est bien inférieur $c <br>";



echo ($b < $c)? "Vrai $b est bien inférieur $c <br>" : "Vrai $b est n'est pas inférieur $c <br>";

// if(isset)/else
// isset est une fonction prédéfinie pour tester si une variable existe, a été déclarée avant dans le script, ou non
// c'est très utile pour savoir si on continue à dérouler le code, à l'éxécuter, ou stopper avec un message d'erreur
if(isset($test)){
    echo "La variable test existe";
}else{
    echo "Elle n'existe pas";
}

// code de la même condition en version contractée

echo (isset($test))? "La variable test existe" : "Elle n'existe pas";

