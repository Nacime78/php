<?php

// Les fonctions prédéfinies sont celles qui sont déjà codées, mises à notre disposition par PHP (isset())

// 01 strlen() et iconv_strlen()
// les deux permettent de tester la longueur d'une chaine de caractères (pour que par exemple on n'entre pas 200 caractères pour un pseudo, on va limiter au maximum à 20)

$phrase = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, architecto?";

// le résultat trouvé sera 75
echo iconv_strlen($phrase) . "<br>";

echo strlen($phrase) . "<br>";

// ------------------------------------

$phrase2 = "étés";

echo iconv_strlen($phrase2) . "<br>"; // iconv strlen compte seulement les caractères affichés

echo strlen($phrase2) . "<br>"; // strlen utilise le nombre d'octet utilisé par chaque caractère

// 02 substring
// fonction prédéfinie qui permet de séléctionner une chaine de caractères à des endroits précis et supprimer le reste

// elle prend trois paramètres. La chaine à découper, le point de départ et le point d'arrivée (je veux conserver la première moitié de ma chaine de caractères)
echo substr($phrase, 0, 16) . '<br>';

echo substr($phrase, 0, -4) . '<br>'; // ici substr prendra tous les caractères sauf les 4 derniers

// 03 date()
// celle ci permet de récupérer l'année en cours

echo date("d / m / Y") . "<br>";

echo "&copy;" . date('Y') . " Nacime" . '<br>';

echo date("D / M / Y"); ou echo date("D - M - Y");

// 04 - empty, contrairement à isset, la fonction vérifie si la variable (qui existe) contient une valeur

$phrase3 = " ";

if(empty($phrase3)){
    echo "La variable n'a pas de contenu <br>";
}else{
    echo "La variable a reçu du contenu";
}

