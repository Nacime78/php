<?php

// la fonction utilisateur, par opposition à prédéfinie est celle qui n'existe pas. Que nous allons coder pour nos propres besoins, par rapport aux fonctionnalités du site

function salut($prenom){
    echo "Salut " . $prenom . '<br>';
}

// paramètre qui sera donné au moment où l'on exécute. Ce paramètre étant envoyé en ligne 7 pour être concaténé au reste de la chaine de caractères
salut("Nacime");