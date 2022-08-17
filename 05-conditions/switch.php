<?php

$couleur = "bleu";

// condition switch = if/else if/else
switch($couleur){
    case "vert":
        echo "La couleur est bien vert";
        break;
    case "bleu":
        echo "La couleur est bien bleu";
        break;
    case "rouge":
        echo "La couleur est bien rouge";
        break;
    default:
        echo "Aucune couleur n'est bonne";
        break;
}

// code switch en else if

if($couleur == "vert"){
    echo "La couleur est bien vert";
}else if($couleur == "bleu"){
    echo "La couleur est bien bleu";
}else if($couleur == "rouge"){
    echo "La couleur est bien rouge";
}else{
    echo "Aucune couleur n'est bonne";
}